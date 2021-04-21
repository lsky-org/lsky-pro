<?php
use PHPUnit\Framework\TestCase;
use Microsoft\Graph\Test\GraphTestBase;
use Microsoft\Graph\Model;
use GuzzleHttp\Exception\RequestException;

class ExcelTest extends TestCase
{
    private $_client;
    private $_fileId;

    protected function setUp(): void
    {
        $graphTestBase = new GraphTestBase();
        $this->_client = $graphTestBase->graphClient;

        $this->_fileId = $this->createTestFile('_excelTestResource'.rand().'.xlsx');
        $this->uploadTestFileContent($this->_fileId);
    }

    protected function tearDown(): void
    {
        $this->deleteTestFile($this->_fileId);
    }

    private function createTestFile($filename)
    {
    	$excelWorkbook = new Model\DriveItem();
    	$excelWorkbook->setName($filename);
    	$file = new Model\File();
    	$file->setODataType("microsoft.graph.file");
    	$excelWorkbook->setFile($file);

    	$excelWorkbookDriveItem = $this->_client->createRequest("POST", "/me/drive/root/children")
    									        ->attachBody($excelWorkbook)
    									        ->setReturnType(Model\DriveItem::class)
    									        ->execute();
    	$this->assertNotNull($excelWorkbookDriveItem);

    	return $excelWorkbookDriveItem->getId();
    }

    private function deleteTestFile($fileId)
    {
    	//After updating the doc, the service cannot immediately process the delete
    	sleep(4);

    	$this->_client->createRequest("DELETE", "/me/drive/items/$fileId")
    		          ->addHeaders(array("if-match" => "*"))
    		          ->execute();
    }

    private function uploadTestFileContent($fileId)
    {
        $stream = GuzzleHttp\Psr7\stream_for(fopen("./tests/Functional/Resources/excelTestResource.xlsx", "r"));
    	$excelDriveItem = $this->_client->createRequest("PUT", "/me/drive/items/" . $this->_fileId . "/content")
    							        ->addHeaders(array(
    							 	         "Content-Type" => "application/octet-stream", 
    							 	         "Content-Length" => filesize("./tests/Functional/Resources/excelTestResource.xlsx")
    							        ))
    							        ->attachBody($stream)
    							        ->execute();
    	$this->assertEquals(200, $excelDriveItem->getStatus());
    }

    /**
    * @group functional
    * @group excel
    */
    public function testGetUpdateRange()
    {
        $rangeToUpdate = $this->_client->createRequest(
                                            "GET", 
                                            "/me/drive/items/" . 
                                            $this->_fileId . 
                                            "/workbook/worksheets/GetUpdateRange/Range(address='A1')"
                                        )
        						       ->setReturnType(Model\WorkbookRange::class)
        						       ->execute();
        $arr = $rangeToUpdate->getValues();

        $arr[0][0] = "TestValueB";
        $dummyWorkbookRange = new Model\WorkbookRange();
        $dummyWorkbookRange->setValues($arr);

        $workbookRange = $this->_client->createRequest(
                                            "PATCH", 
                                            "/me/drive/items/" . 
                                            $this->_fileId . 
                                            "/workbook/worksheets/GetUpdateRange/Range(address='A1')"
                                        )
        						       ->attachBody($dummyWorkbookRange)
        						       ->setReturnType(Model\WorkbookRange::class)
        						       ->execute();
        $this->assertNotNull($workbookRange);
        $this->assertEquals("TestValueB", $workbookRange->getValues()[0][0]);
    }

    /**
    * @group functional
    * @group excel
    */
    public function testChangeNumberFormat()
    {
    	$excelWorksheetName = "ChangeNumberFormat";
    	$rangeAddress = "E2";

    	$arr = [["$#,##0.00;[Red]$#,##0.00"]];

    	$workbookRange = $this->_client->createRequest(
                                            "PATCH", 
                                            "/me/drive/items/" . 
                                            $this->_fileId . 
                                            "/workbook/worksheets/$excelWorksheetName/range(address='$rangeAddress')"
                                        )
    							        ->attachBody(array("numberFormat" => $arr))
    							        ->setReturnType(Model\WorkbookRange::class)
    							        ->execute();
    	$this->assertNotNull($workbookRange);
    	$this->assertEquals($arr, $workbookRange->getNumberFormat());
    }

    /**
    * @group functional
    * @group excel
    */
    public function testAbsFunc()
    {
    	$inputNumber = "-10";

    	$workbookFunctionResult = $this->_client->createRequest(
                                                    "POST", 
                                                    "/me/drive/items/" . 
                                                    $this->_fileId . 
                                                    "/workbook/functions/abs"
                                                )
    									        ->attachBody('{"number": '. $inputNumber . '}')
    									        ->setReturnType(Model\WorkbookFunctionResult::class)
    									        ->execute();
    	$this->assertNotNull($workbookFunctionResult);
    	$this->assertEquals("10", $workbookFunctionResult->getValue());
    }

    /**
    * @group functional
    * @group excel
    */
    public function testSetFormula()
    {
    	$arr = [['=A4*B4']];

    	$workbookRange = $this->_client->createRequest(
                                            "PATCH", 
                                            "/me/drive/items/" . 
                                            $this->_fileId . 
                                            "/workbook/worksheets/SetFormula/range(address='C4')"
                                        )
    							        ->attachBody(array("formulas" => $arr))
    							        ->setReturnType(Model\WorkbookRange::class)
    							        ->execute();
    	$this->assertNotNull($workbookRange);
    	$this->assertEquals($arr, $workbookRange->getFormulas());
    }

    /**
    * @group functional
    * @group excel
    */
    public function testAddTableUsedRange()
    {
    	$workbookRange = $this->_client->createRequest(
                                            "GET", 
                                            "/me/drive/items/" . 
                                            $this->_fileId . 
                                            "/workbook/worksheets/AddTableUsedRange/usedrange"
                                        )
    							       ->setReturnType(Model\WorkbookRange::class)
    							       ->execute();

    	$data = array("address" => $workbookRange->getAddress(), "hasHeaders" => false);

    	$workbookTable = $this->_client->createRequest("POST", "/me/drive/items/" . $this->_fileId . "/workbook/worksheets/AddTableUsedRange/tables")
    							->attachBody($data)
    							->setReturnType(Model\WorkbookTable::class);

    	$this->assertNotNull($workbookTable);
    }

    /**
    * @group functional
    * @group excel
    */
    public function testAddRowToTable()
    {
    	$newWorkbookTableRow = new Model\WorkbookTableRow();
    	$newWorkbookTableRow->setIndex(0);
    	$arr = [["ValueA2", "ValueA3"]];
    	$newWorkbookTableRow->setValues($arr);

    	$workbookTableRow = $this->_client->createRequest(
                                                "POST", 
                                                "/me/drive/items/" . 
                                                $this->_fileId . 
                                                "/workbook/tables/Table1/Rows"
                                          )
    							          ->attachBody($newWorkbookTableRow)
    							          ->setReturnType(Model\WorkbookRange::class)
    							          ->execute();

    	$this->assertNotNull($workbookTableRow);
    }

    /**
    * @group functional
    * @group excel
    */
    public function testSortTable()
    {
    	$sortField = new Model\WorkbookSortField();
    	$sortField->setAscending(true);
    	$sortField->setSortOn("Value");
    	$sortField->setKey(0);

    	$workbookSortFields = $this->_client->createRequest(
                                                "POST", 
                                                "/me/drive/items/" . 
                                                $this->_fileId . 
                                                "/workbook/tables/Table2/sort/apply"
                                            )
    							            ->attachBody('{"fields":'. json_encode(array($sortField)) . '}')
    							            ->setReturnType(Model\WorkbookSortField::class)
    							            ->execute();

    	$this->assertNotNull($workbookSortFields);
    }

    /**
    * @group functional
    * @group excel
    */
    public function testFilterTableValues()
    {
    	$this->_client->createRequest(
    				      "POST", 
    				      "/me/drive/items/" . 
                          $this->_fileId . 
                          "/workbook/tables/FilterTableValues/columns/1/filter/applyvaluesfilter"
        			    )
        			    ->attachBody('{"values":["2"]}')
        			    ->setReturnType(Model\WorkbookSortField::class)
        			    ->execute();
    }

    /**
    * @group functional
    * @group excel
    */
    public function testCreateChartFromTable()
    {
    	$tableRange = $this->_client->createRequest(
                                        "GET", 
                                        "/me/drive/items/" . 
                                        $this->_fileId . 
                                        "/workbook/tables/CreateChartFromTable/range"
                                    )
    							    ->setReturnType(Model\WorkbookRange::class)
    							    ->execute();
    	$address = $tableRange->getAddress();

    	$workbookChart = $this->_client->createRequest(
                                            "POST", 
                                            "/me/drive/items/" . 
                                            $this->_fileId . 
                                            "/workbook/worksheets/CreateChartFromTable/charts/add"
                                        )
    							       ->attachBody(array("type" => "ColumnStacked", "sourceData" => "$address", "seriesBy" => "Auto"))
    							       ->setReturnType(Model\WorkbookChart::class)
    							       ->execute();
    	$this->assertNotNull($workbookChart);
    }

    /**
    * @group functional
    * @group excel
    */
    public function testProtectWorksheet()
    {
        try{
        	$this->_client->createRequest(
                                "POST", 
                                "/me/drive/items/" . 
                                $this->_fileId . 
                                "/workbook/worksheets/ProtectWorksheet/protection/protect"
                            )
        		            ->execute();

        	$dummyWorkbookRange = new Model\WorkbookRange();
        	$dummyWorkbookRange->setValues('[["This should not work"]]');

        	$workbookRange = $this->_client->createRequest(
                                                "PATCH", 
                                                "/me/drive/items/" . 
                                                $this->_fileId . 
                                                "/workbook/worksheets('protectworksheet')/cell(row=1,column=1)"
                                            )
        							        ->attachBody($dummyWorkbookRange)
        							        ->execute();
        } catch(Exception $e)
        {
        	//403: Forbidden - file is locked for editing
        	$this->assertEquals(403, $e->getResponse()->getStatusCode());

        	$this->_client->createRequest(
                                "POST", 
                                "/me/drive/items/" . 
                                $this->_fileId . 
                                "/workbook/worksheets/ProtectWorksheet/protection/unprotect"
                            )
        		            ->execute();
        } 
    }
}
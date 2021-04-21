<?php

namespace Test\Functional\Krizalys\Onedrive\Proxy;

use Krizalys\Onedrive\Constant\ConflictBehavior;
use Krizalys\Onedrive\Constant\Role;
use Krizalys\Onedrive\Constant\SharingLinkType;
use Krizalys\Onedrive\Proxy\DriveItemProxy;
use PHPUnit\Framework\TestCase;
use Test\Functional\Krizalys\Onedrive\Traits\AssertionsTrait;
use Test\Functional\Krizalys\Onedrive\Traits\AsynchronousTrait;
use Test\Functional\Krizalys\Onedrive\Traits\ClientFactoryTrait;
use Test\Functional\Krizalys\Onedrive\Traits\ConfigurationTrait;
use Test\Functional\Krizalys\Onedrive\Traits\HttpJsonTrait;
use Test\Functional\Krizalys\Onedrive\Traits\OnedriveSandboxTrait;

class DriveItemProxyTest extends TestCase
{
    use AssertionsTrait;
    use AsynchronousTrait;
    use ClientFactoryTrait;
    use ConfigurationTrait;
    use HttpJsonTrait;
    use OnedriveSandboxTrait;

    private static $root;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $clientId = self::getConfig('CLIENT_ID');
        $username = self::getConfig('USERNAME');
        $password = self::getConfig('PASSWORD');
        $secret   = self::getConfig('SECRET');

        $client = self::createClient(
            $clientId,
            $username,
            $password,
            $secret
        );

        self::$root = $client->getRoot();
    }

    public function testCreateFolderWhenNotExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->createFolder(
                'Test folder',
                ['description' => 'Test description']
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test folder', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertFolderProxy($driveItem->folder);
        });
    }

    /**
     * @expectedException \Krizalys\Onedrive\Exception\ConflictException
     *
     * @expectedExceptionMessage There is already a drive item named "Test
     *                           folder" in this folder
     */
    public function testCreateFolderWhenExistingAndFailConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->createFolder('Test folder');

            $driveItem = $sandbox->createFolder(
                'Test folder',
                ['conflictBehavior' => ConflictBehavior::FAIL]
            );
        });
    }

    public function testCreateFolderWhenExistingAndRenameConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->createFolder('Test folder');

            $driveItem = $sandbox->createFolder(
                'Test folder',
                [
                    'conflictBehavior' => ConflictBehavior::RENAME,
                    'description'      => 'Test description',
                ]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test folder 1', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertFolderProxy($driveItem->folder);

            $driveItem = $sandbox->createFolder(
                'Test folder',
                [
                    'conflictBehavior' => ConflictBehavior::RENAME,
                    'description'      => 'Test description',
                ]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test folder 2', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertFolderProxy($driveItem->folder);
        });
    }

    public function testCreateFolderWhenExistingAndReplaceConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->createFolder('Test folder');

            $driveItem = $sandbox->createFolder(
                'Test folder',
                [
                    'conflictBehavior' => ConflictBehavior::REPLACE,
                    'description'      => 'Test description',
                ]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test folder', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertFolderProxy($driveItem->folder);
        });
    }

    public function testGetChildren()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->createFolder('Test folder');

            for ($i = 1; $i <= 2; ++$i) {
                $sandbox->upload(
                    "Test file #$i",
                    "Test content #$i",
                    []
                );
            }

            $children = $sandbox->getChildren(
                [
                    'top' => 2,

                    'orderBy' => [
                        ['name', 'desc'],
                    ],
                ]
            );

            foreach ($children as $child) {
                $this->assertDriveItemProxy($child);
            }

            $this->assertCount(2, $children);
            $this->assertEquals('Test folder', $children[0]->name);
            $this->assertEquals('Test file #2', $children[1]->name);
        });
    }

    public function testDeleteFile()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem->delete();
            $children = $sandbox->children;
            $this->assertCount(0, $children);
        });
    }

    public function testDeleteFolder()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->createFolder('Test folder');
            $driveItem->delete();
            $children = $sandbox->children;
            $this->assertCount(0, $children);
        });
    }

    public function testUploadStringWhenNotExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test content', $driveItem->content);
            $this->assertFileProxy($driveItem->file);
        });
    }

    /**
     * @expectedException \Krizalys\Onedrive\Exception\ConflictException
     *
     * @expectedExceptionMessage There is already a drive item named
     *                           "Test%20file" in this folder
     */
    public function testUploadStringWhenExistingAndFailConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                ['conflictBehavior' => ConflictBehavior::FAIL]
            );
        });
    }

    public function testUploadStringWhenExistingAndRenameConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                ['conflictBehavior' => ConflictBehavior::RENAME]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file 1', $driveItem->name);
            $this->assertEquals('Test content', $driveItem->content);
            $this->assertFileProxy($driveItem->file);
        });
    }

    public function testUploadStringWhenExistingAndReplaceConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                ['conflictBehavior' => ConflictBehavior::REPLACE]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test content', $driveItem->content);
            $this->assertFileProxy($driveItem->file);
        });
    }

    public function testUploadStreamWhenNotExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $content = fopen('php://memory', 'rb+');
            fwrite($content, 'Test content');
            rewind($content);

            $driveItem = $sandbox->upload(
                'Test file',
                $content,
                []
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test content', $driveItem->content);
            $this->assertFileProxy($driveItem->file);

            // No need to fclose $content; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    /**
     * @expectedException \Krizalys\Onedrive\Exception\ConflictException
     *
     * @expectedExceptionMessage There is already a drive item named
     *                           "Test%20file" in this folder
     */
    public function testUploadStreamWhenExistingAndFailConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $content = fopen('php://memory', 'rb+');
            fwrite($content, 'Test content');
            rewind($content);

            $driveItem = $sandbox->upload(
                'Test file',
                $content,
                ['conflictBehavior' => ConflictBehavior::FAIL]
            );

            // No need to fclose $content; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    public function testUploadStreamWhenExistingAndRenameConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'test-file.txt',
                'Test content',
                []
            );

            $content = fopen('php://memory', 'rb+');
            fwrite($content, 'Test content');
            rewind($content);

            $driveItem = $sandbox->upload(
                'test-file.txt',
                $content,
                ['conflictBehavior' => ConflictBehavior::RENAME]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('test-file 1.txt', $driveItem->name);
            $this->assertEquals('Test content', $driveItem->content);
            $this->assertFileProxy($driveItem->file);

            // No need to fclose $content; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    public function testUploadStreamWhenExistingAndReplaceConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $content = fopen('php://memory', 'rb+');
            fwrite($content, 'Test content');
            rewind($content);

            $driveItem = $sandbox->upload(
                'Test file',
                $content,
                ['conflictBehavior' => ConflictBehavior::REPLACE]
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test content', $driveItem->content);
            $this->assertFileProxy($driveItem->file);

            // No need to fclose $content; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    public function testStartUploadStringWhenNotExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $string = str_repeat("Test content\n", 100000);

            $uploadSession = $sandbox->startUpload(
                'Test file',
                $string,
                ['description' => 'Test description']
            );

            $this->assertUploadSessionProxy($uploadSession);
            $driveItem = $uploadSession->complete();
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertEquals($string, $driveItem->content);
            $this->assertFileProxy($driveItem->file);
        });
    }

    /**
     * @expectedException \Krizalys\Onedrive\Exception\ConflictException
     *
     * @expectedExceptionMessage There is already a drive item named
     *                           "Test%20file" in this folder
     */
    public function testStartUploadStringWhenExistingAndFailConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $string = str_repeat("Test content\n", 100000);

            $sandbox->startUpload(
                'Test file',
                $string,
                ['conflictBehavior' => ConflictBehavior::FAIL]
            );
        });
    }

    public function testStartUploadStringWhenExistingAndRenameConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $string = str_repeat("Test content\n", 100000);

            $uploadSession = $sandbox->startUpload(
                'Test file',
                $string,
                [
                    'conflictBehavior' => ConflictBehavior::RENAME,
                    'description'      => 'Test description',
                ]
            );

            $this->assertUploadSessionProxy($uploadSession);
            $driveItem = $uploadSession->complete();
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file 1', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertEquals($string, $driveItem->content);
            $this->assertFileProxy($driveItem->file);
        });
    }

    public function testStartUploadStringWhenExistingAndReplaceConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $string = str_repeat("Test content\n", 100000);

            $uploadSession = $sandbox->startUpload(
                'Test file',
                $string,
                [
                    'conflictBehavior' => ConflictBehavior::REPLACE,
                    'description'      => 'Test description',
                ]
            );

            $this->assertUploadSessionProxy($uploadSession);
            $driveItem = $uploadSession->complete();
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertEquals($string, $driveItem->content);
            $this->assertFileProxy($driveItem->file);
        });
    }

    public function testStartUploadStreamWhenNotExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $content = str_repeat("Test content\n", 100000);
            $stream  = fopen('php://memory', 'rb+');
            fwrite($stream, $content);
            rewind($stream);

            $uploadSession = $sandbox->startUpload(
                'Test file',
                $stream,
                ['description' => 'Test description']
            );

            $this->assertUploadSessionProxy($uploadSession);
            $driveItem = $uploadSession->complete();
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertEquals($content, $driveItem->content);
            $this->assertFileProxy($driveItem->file);

            // No need to fclose $stream; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    /**
     * @expectedException \Krizalys\Onedrive\Exception\ConflictException
     *
     * @expectedExceptionMessage There is already a drive item named
     *                           "Test%20file" in this folder
     */
    public function testStartUploadStreamWhenExistingAndFailConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $content = str_repeat("Test content\n", 100000);
            $stream  = fopen('php://memory', 'rb+');
            fwrite($stream, $content);
            rewind($stream);

            $sandbox->startUpload(
                'Test file',
                $stream,
                ['conflictBehavior' => ConflictBehavior::FAIL]
            );

            // No need to fclose $stream; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    public function testStartUploadStreamWhenExistingAndRenameConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $content = str_repeat("Test content\n", 100000);
            $stream  = fopen('php://memory', 'rb+');
            fwrite($stream, $content);
            rewind($stream);

            $uploadSession = $sandbox->startUpload(
                'Test file',
                $stream,
                [
                    'conflictBehavior' => ConflictBehavior::RENAME,
                    'description'      => 'Test description',
                ]
            );

            $this->assertUploadSessionProxy($uploadSession);
            $driveItem = $uploadSession->complete();
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file 1', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertEquals($content, $driveItem->content);
            $this->assertFileProxy($driveItem->file);

            // No need to fclose $stream; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    public function testStartUploadStreamWhenExistingAndReplaceConflictBehavior()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $content = str_repeat("Test content\n", 100000);
            $stream  = fopen('php://memory', 'rb+');
            fwrite($stream, $content);
            rewind($stream);

            $uploadSession = $sandbox->startUpload(
                'Test file',
                $stream,
                [
                    'conflictBehavior' => ConflictBehavior::REPLACE,
                    'description'      => 'Test description',
                ]
            );

            $this->assertUploadSessionProxy($uploadSession);
            $driveItem = $uploadSession->complete();
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file', $driveItem->name);
            $this->assertEquals('Test description', $driveItem->description);
            $this->assertEquals($content, $driveItem->content);
            $this->assertFileProxy($driveItem->file);

            // No need to fclose $stream; it is done internally by Guzzle when
            // instantiating a Guzzle stream from it.
        });
    }

    public function testRename()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $destination = $sandbox->createFolder('Test destination');

            $driveItem = $driveItem->rename(
                'Test file (renamed)',
                ['description' => 'Test description (updated)']
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($sandbox->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file (renamed)', $driveItem->name);
            $this->assertEquals('Test description (updated)', $driveItem->description);
        });
    }

    public function testMoveFile()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $destination = $sandbox->createFolder('Test destination');

            $driveItem = $driveItem->move(
                $destination,
                ['name' => 'Test file (moved)']
            );

            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($destination->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file (moved)', $driveItem->name);
        });
    }

    public function testMoveFolder()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem   = $sandbox->createFolder('Test folder');
            $destination = $sandbox->createFolder('Test destination');

            $driveItem = $driveItem->move(
                $destination,
                ['name' => 'Test folder (moved)']
            );

            $children = $sandbox->children;
            $this->assertCount(1, $children);
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($destination->id, $driveItem->parentReference->id);
            $this->assertEquals('Test folder (moved)', $driveItem->name);
        });
    }

    public function testCopyFile()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $destination = $sandbox->createFolder('Test destination');

            $uri = $driveItem->copy(
                $destination,
                ['name' => 'Test file (copied)']
            );

            self::waitUntil(function () use ($uri) {
                return $this->getAndDecode($uri)->status == 'completed';
            });

            $this->assertRegExp(self::$uriRegex, $uri);
            $driveItems = $destination->getChildren(['top' => 2]);
            $this->assertCount(1, $driveItems);
            $driveItem = $driveItems[0];
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($destination->id, $driveItem->parentReference->id);
            $this->assertEquals('Test file (copied)', $driveItem->name);
        });
    }

    public function testCopyFolder()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem   = $sandbox->createFolder('Test folder');
            $destination = $sandbox->createFolder('Test destination');

            $uri = $driveItem->copy(
                $destination,
                ['name' => 'Test folder (copied)']
            );

            self::waitUntil(function () use ($uri) {
                return $this->getAndDecode($uri)->status == 'completed';
            });

            $this->assertRegExp(self::$uriRegex, $uri);
            $driveItems = $destination->getChildren(['top' => 2]);
            $this->assertCount(1, $driveItems);
            $driveItem = $driveItems[0];
            $this->assertDriveItemProxy($driveItem);
            $this->assertNotNull($driveItem->parentReference);
            $this->assertEquals($destination->id, $driveItem->parentReference->id);
            $this->assertEquals('Test folder (copied)', $driveItem->name);
        });
    }

    /**
     * @dataProvider provideLinkTypes
     */
    public function testCreateLinkToFileWhenNotExisting($type)
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) use ($type) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $permission = $driveItem->createLink($type);
            $this->assertPermissionProxy($permission);
        });
    }

    /**
     * @dataProvider provideLinkTypes
     */
    public function testCreateLinkToFileWhenExisting($type)
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) use ($type) {
            $driveItem = $sandbox->upload(
                'Test file',
                'Test content',
                []
            );

            $driveItem->createLink($type);
            $permission = $driveItem->createLink($type);
            $this->assertPermissionProxy($permission);
        });
    }

    /**
     * @dataProvider provideLinkTypes
     */
    public function testCreateLinkToFolderWhenNotExisting($type)
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) use ($type) {
            $driveItem  = $sandbox->createFolder('Test folder');
            $permission = $driveItem->createLink($type);
            $this->assertPermissionProxy($permission);
        });
    }

    /**
     * @dataProvider provideLinkTypes
     */
    public function testCreateLinkToFolderWhenExisting($type)
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) use ($type) {
            $driveItem = $sandbox->createFolder('Test folder');
            $driveItem->createLink($type);
            $permission = $driveItem->createLink($type);
            $this->assertPermissionProxy($permission);
        });
    }

    public function testInviteWhenNotExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->createFolder('Test folder');
            $recipient = self::getConfig('RECIPIENT');

            $permissions = $driveItem->invite(
                [$recipient],
                [Role::READ],
                [
                    'message'        => 'Test message',
                    'requireSignIn'  => true,
                    'sendInvitation' => true,
                ]
            );

            foreach ($permissions as $permission) {
                $this->assertPermissionProxy($permission);
            }
        });
    }

    public function testInviteWhenExisting()
    {
        self::withOnedriveSandbox(self::$root, __METHOD__, function (DriveItemProxy $sandbox) {
            $driveItem = $sandbox->createFolder('Test folder');
            $recipient = self::getConfig('RECIPIENT');

            $driveItem->invite(
                [$recipient],
                [Role::READ]
            );

            $permissions = $driveItem->invite(
                [$recipient],
                [Role::READ],
                [
                    'message'        => 'Test message',
                    'requireSignIn'  => true,
                    'sendInvitation' => true,
                ]
            );

            foreach ($permissions as $permission) {
                $this->assertPermissionProxy($permission);
            }
        });
    }

    public function provideLinkTypes()
    {
        return [
            [SharingLinkType::VIEW],
            [SharingLinkType::EDIT],
            [SharingLinkType::EMBED],
        ];
    }
}

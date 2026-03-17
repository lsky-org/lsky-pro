<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $fileName }} - 文档预览</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background: #1a1a2e; color: #fff; }
        .toolbar {
            position: fixed; top: 0; left: 0; right: 0; z-index: 100;
            height: 48px; background: #16213e; display: flex; align-items: center;
            padding: 0 16px; box-shadow: 0 2px 8px rgba(0,0,0,0.3);
        }
        .toolbar .file-name { flex: 1; font-size: 14px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .toolbar .file-info { font-size: 12px; color: #8899aa; margin-left: 12px; }
        .toolbar .btn {
            padding: 6px 14px; border: none; border-radius: 4px; cursor: pointer;
            font-size: 13px; margin-left: 8px; transition: all 0.2s; text-decoration: none;
        }
        .toolbar .btn-download { background: #0f3460; color: #fff; }
        .toolbar .btn-download:hover { background: #1a5276; }
        .toolbar .btn-close { background: #533483; color: #fff; }
        .toolbar .btn-close:hover { background: #6c4599; }
        .viewer-container {
            position: fixed; top: 48px; left: 0; right: 0; bottom: 0;
            overflow: auto; background: #2a2a3e;
        }
        #pdf-viewer { padding: 20px; display: flex; flex-direction: column; align-items: center; gap: 12px; }
        #pdf-viewer canvas { box-shadow: 0 2px 12px rgba(0,0,0,0.4); max-width: 100%; }
        #docx-viewer {
            background: #fff; color: #333; min-height: 100%;
            padding: 20px; max-width: 900px; margin: 20px auto;
            box-shadow: 0 2px 12px rgba(0,0,0,0.3); border-radius: 4px;
        }
        #xlsx-viewer { background: #fff; color: #333; min-height: 100%; padding: 10px; }
        #xlsx-viewer table { border-collapse: collapse; width: 100%; font-size: 13px; }
        #xlsx-viewer th, #xlsx-viewer td { border: 1px solid #ddd; padding: 6px 10px; text-align: left; }
        #xlsx-viewer th { background: #f0f0f0; font-weight: 600; }
        #xlsx-viewer .sheet-tabs { display: flex; gap: 4px; margin-bottom: 10px; flex-wrap: wrap; }
        #xlsx-viewer .sheet-tab {
            padding: 6px 14px; background: #e0e0e0; border: none; cursor: pointer;
            border-radius: 4px 4px 0 0; font-size: 12px;
        }
        #xlsx-viewer .sheet-tab.active { background: #fff; font-weight: bold; }
        #svg-viewer { display: flex; justify-content: center; align-items: center; min-height: 100%; padding: 20px; }
        #svg-viewer img { max-width: 100%; max-height: calc(100vh - 88px); }
        .loading { display: flex; justify-content: center; align-items: center; height: 200px; font-size: 16px; color: #8899aa; }
        .loading .spinner {
            width: 30px; height: 30px; border: 3px solid #333; border-top-color: #0f3460;
            border-radius: 50%; animation: spin 0.8s linear infinite; margin-right: 12px;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        .error { text-align: center; padding: 60px 20px; color: #e74c3c; }
        .error h3 { margin-bottom: 12px; }
    </style>
</head>
<body>
    <div class="toolbar">
        <span class="file-name">{{ $fileName }}</span>
        <span class="file-info">{{ number_format($fileSize, 1) }} KB</span>
        <a class="btn btn-download" href="{{ $image->url }}" download>下载</a>
        <button class="btn btn-close" onclick="window.close()">关闭</button>
    </div>
    <div class="viewer-container">
        <div class="loading" id="loading"><div class="spinner"></div><span>正在加载文档...</span></div>
        <div id="pdf-viewer" style="display:none;"></div>
        <div id="docx-viewer" style="display:none;"></div>
        <div id="xlsx-viewer" style="display:none;"></div>
        <div id="svg-viewer" style="display:none;"></div>
        <div class="error" id="error" style="display:none;"><h3>文档加载失败</h3><p id="error-msg"></p></div>
    </div>

    <script>
        function showError(msg) {
            document.getElementById('loading').style.display = 'none';
            document.getElementById('error').style.display = 'block';
            document.getElementById('error-msg').textContent = msg;
        }
        var CONTENT_URL = '{{ route("document.content", $fileId) }}';
        var VIEWER_TYPE = '{{ $viewerType }}';
    </script>

    @if($viewerType === 'pdf' || $needConvert)
    <script type="module">
        import * as pdfjsLib from 'https://cdn.jsdelivr.net/npm/pdfjs-dist@4.0.379/build/pdf.min.mjs';
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@4.0.379/build/pdf.worker.min.mjs';
        try {
            const pdf = await pdfjsLib.getDocument(CONTENT_URL).promise;
            const container = document.getElementById('pdf-viewer');
            container.style.display = 'flex';
            document.getElementById('loading').style.display = 'none';
            for (let i = 1; i <= pdf.numPages; i++) {
                const page = await pdf.getPage(i);
                const scale = Math.min(1.5, (window.innerWidth - 80) / page.getViewport({scale: 1}).width);
                const viewport = page.getViewport({ scale });
                const canvas = document.createElement('canvas');
                canvas.width = viewport.width;
                canvas.height = viewport.height;
                container.appendChild(canvas);
                await page.render({ canvasContext: canvas.getContext('2d'), viewport }).promise;
            }
        } catch (e) { showError('PDF 加载失败: ' + e.message); }
    </script>
    @endif

    @if($viewerType === 'docx')
    <script src="https://cdn.jsdelivr.net/npm/docx-preview@0.3.3/dist/docx-preview.min.js"></script>
    <script>
        (async function() {
            try {
                var resp = await fetch(CONTENT_URL, { credentials: 'same-origin' });
                if (!resp.ok) throw new Error('HTTP ' + resp.status);
                var blob = await resp.blob();
                var container = document.getElementById('docx-viewer');
                container.style.display = 'block';
                document.getElementById('loading').style.display = 'none';
                await docx.renderAsync(blob, container, null, {
                    inWrapper: false, ignoreWidth: false, breakPages: true, useBase64URL: true,
                });
            } catch (e) { showError('Word 文档加载失败: ' + e.message); }
        })();
    </script>
    @endif

    @if($viewerType === 'xlsx')
    <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>
    <script>
        (async function() {
            try {
                var resp = await fetch(CONTENT_URL, { credentials: 'same-origin' });
                if (!resp.ok) throw new Error('HTTP ' + resp.status);
                var data = await resp.arrayBuffer();
                var wb = XLSX.read(data, { type: 'array' });
                var container = document.getElementById('xlsx-viewer');
                container.style.display = 'block';
                document.getElementById('loading').style.display = 'none';
                if (wb.SheetNames.length > 1) {
                    var tabs = document.createElement('div');
                    tabs.className = 'sheet-tabs';
                    wb.SheetNames.forEach(function(name, i) {
                        var tab = document.createElement('button');
                        tab.className = 'sheet-tab' + (i === 0 ? ' active' : '');
                        tab.textContent = name;
                        tab.onclick = function() {
                            document.querySelectorAll('.sheet-tab').forEach(function(t) { t.classList.remove('active'); });
                            this.classList.add('active');
                            renderSheet(wb.Sheets[name]);
                        };
                        tabs.appendChild(tab);
                    });
                    container.appendChild(tabs);
                }
                var tableDiv = document.createElement('div');
                tableDiv.id = 'sheet-table';
                container.appendChild(tableDiv);
                function renderSheet(sheet) { tableDiv.innerHTML = XLSX.utils.sheet_to_html(sheet, { editable: false }); }
                renderSheet(wb.Sheets[wb.SheetNames[0]]);
            } catch (e) { showError('Excel 加载失败: ' + e.message); }
        })();
    </script>
    @endif

    @if($viewerType === 'svg')
    <script>
        (function() {
            var container = document.getElementById('svg-viewer');
            var img = document.createElement('img');
            img.src = CONTENT_URL;
            img.alt = '{{ $fileName }}';
            img.onload = function() {
                container.style.display = 'flex';
                document.getElementById('loading').style.display = 'none';
            };
            img.onerror = function() { showError('SVG 加载失败'); };
            container.appendChild(img);
        })();
    </script>
    @endif
</body>
</html>

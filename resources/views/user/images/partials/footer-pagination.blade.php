<div class="images-footer">
    <div class="images-pagination">
        <button type="button" id="images-page-prev" class="pager-btn">上一页</button>
        <span id="images-page-info" class="pager-info">第 1 / 1 页，共 0 条</span>
        <button type="button" id="images-page-next" class="pager-btn">下一页</button>
        <span class="images-footer-label">每页</span>
        <select id="images-page-size" class="pager-select">
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="150">150</option>
            <option value="200">200</option>
        </select>
        <span id="images-page-jump-label" class="images-footer-label">前往</span>
        <input id="images-page-jump" class="pager-jump" type="number" min="1" step="1" placeholder="页码">
        <button type="button" id="images-page-go" class="pager-btn">确定</button>
        <label class="pager-toggle" title="开启后滚动到底部自动加载下一页">
            <input type="checkbox" id="images-infinite-scroll">
            <span class="pager-toggle-label">无限滚动</span>
        </label>
    </div>
</div>

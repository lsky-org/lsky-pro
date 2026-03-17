<div class="images-aside-head">
    <div class="images-aside-head-main">
        <div class="images-aside-title">用户筛选树</div>
        <input type="text" id="user-tree-search" class="aside-tree-search" placeholder="筛选用户...">
    </div>
</div>
<div class="images-tree-list">
    <div class="tree-label">上传用户</div>
    <a class="tree-link {{ $keywords === '' ? 'active' : '' }}" href="{{ route('admin.images') }}"><span class="tree-link-name">全部图片</span></a>
    <a class="tree-link {{ $activeExact('is:guest') ? 'active' : '' }}" href="{{ route('admin.images', ['keywords' => 'is:guest']) }}"><span class="tree-link-name">游客上传</span></a>
    @foreach($users as $user)
        <a class="tree-link js-user-tree-link {{ $activeUid === $user->id ? 'active' : '' }}" href="{{ route('admin.images', ['keywords' => 'uid:'.$user->id]) }}">
            <span class="tree-link-name">{{ $user->name }}</span>
            <span class="tree-link-count">{{ $user->images_count }}</span>
        </a>
    @endforeach
    <div id="user-tree-empty" class="tree-empty-tip">没有匹配的用户</div>
</div>

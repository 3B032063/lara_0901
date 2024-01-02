<div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
    @if (count($errors) > 0)
        <!-- 表單錯誤清單 -->
        <strong>哎呀！出了些問題！</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>

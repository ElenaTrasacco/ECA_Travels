<form class="d-inline" action="" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-' .$lang . '.svg')}}" alt="" width="32" height="32">
    </button>
</form>
<aside class="userbar">
    <ul class="userbar-items">
        <li class="userbar-item">
            <form class="js-validation-signin" method="GET" action="{{ url('/challenge') }}" novalidate="novalidate">
                <div class="form-group text-center">
                    <button type="submit" class="">
                    <i class="ri-2x ri-checkbox-circle-line fontweight"></i>
                    </button>
                </div>
            </form>
        </li>
        <li class="userbar-item">
            <form class="js-validation-signin" method="POST" action="{{ route('logout') }}" novalidate="novalidate">
                @csrf
                <div class="form-group text-center">
                    <button type="submit" class="">
                    <i class="ri-2x ri-logout-circle-r-line fontweight"></i>
                    </button>
                </div>
            </form>
        </li>

    </ul>
</aside>
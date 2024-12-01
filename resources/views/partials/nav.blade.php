<nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
    <div class="flex justify-between">
        <a href="#" class="flex items-center p-2 mr-4 no-underline">
            <img class="max-h-l2 w-auto" src="{{ asset('images/logo.png') }}" />
        </a>
        <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
            class="flex items-center ml-auto md-hidden indigo-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
            <i data-feather="menu"></i>
        </a>
    </div>
    <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
        <a href="#home" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Home</a>
        <a href="#features" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Features</a>
        <!-- <a href="#pricing" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Pricing</a>
        <a href="#blog" class="fs-s1 mx-3 py-3 indigo no-underline hover-underline">Blog</a> -->
        <a href="#" class="button bg-white black fw-600 no-underline mx-5">Register</a>
    </div>
</nav>
 
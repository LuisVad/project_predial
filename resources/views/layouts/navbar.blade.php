<!-- resources/views/layouts/navbar.blade.php -->
<nav
    class="sticky top-0 z-10 flex w-full flex-wrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-amber-800 lg:py-4">
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <div style="display: flex; align-items: center;">
            <button id="toggleSidebar" class="ms-5 text-amber-800 p-2">
                <span class="material-icons text-amber-800 p-2">menu</span>
            </button>
            <img src="{{ asset('assets/images/Logo_ayala.png') }}" alt="logo" width="200" height="150"
                style="margin-left: 10px;">
        </div>
        <div class="flex w-[30%] items-center justify-center">
            <h1 class="text-center flex-grow"><strong></strong></h1>
        </div>
        <div class="ms-5 flex w-[30%] items-center justify-between bg-white">
            <input type="search"
                class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-secondary-500 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-surface transition duration-300 ease-in-out focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none motion-reduce:transition-none dark:border-white/10 dark:bg-body-dark dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill"
                placeholder="Buscar" aria-label="Search" aria-describedby="button-addon2" />
            <span class="material-icons text-amber-800 p-2">search</span>
        </div>
    </div>
</nav>

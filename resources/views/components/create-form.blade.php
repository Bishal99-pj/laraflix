<form method="POST" action="" class="mb-8">
    @csrf
    <h2 class="text-xl font-semibold mb-3 text-[#1b1b18] dark:text-[#EDEDEC]">Add to list</h2>
    <div class="flex">
        <input type="text" name="movie_title" placeholder="Movie or show title"
            class="flex-grow py-2 px-4 rounded-l border border-r-0 border-black bg-white text-sm leading-normal focus:outline-0 dark:bg-[#161615] dark:border-[#eeeeec] dark:text-[#EDEDEC]"
            required autofocus>
        <button type="submit"
            class="flex items-center px-4 py-2 rounded-r border border-black cursor-pointer bg-[#1b1b18] text-white text-sm leading-normal transition-all dark:bg-[#eeeeec] dark:hover:bg-[#eeeeec]/90 dark:border-[#eeeeec] dark:text-[#1C1C1A] font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="w-4 h-4 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            New
        </button>
    </div>
</form>
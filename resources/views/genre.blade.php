@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Genres
            </h2>
            <nav>
                <a
                    href="/genres/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">ID</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="font-medium">Name</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">Description</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <p class="font-medium">Actions</p>
                    </div>
                </div>

                <!-- Genre 1 -->
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">1</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Drama</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Fokus pada konflik emosional dan perubahan karakter dalam sebuah cerita. Biasanya melibatkan pertentangan manusiawi dan situasi yang mengharukan.</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="#" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="#" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <!-- Genre 2 -->
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">2</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Sport</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Menampilkan olahraga sebagai fokus utama cerita. Biasanya mengikuti perjalanan atlet atau tim, menyoroti kompetisi, perjuangan, dan pencapaian dalam olahraga tertentu.</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="#" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="#" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <!-- Genre 3 -->
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">3</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Fantasy</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Menampilkan unsur-unsur yang tidak mungkin atau tidak realistis, seperti sihir, makhluk mitos, atau dunia alternatif. Memungkinkan penonton untuk melarikan diri ke dunia yang dibangun secara imajinatif.</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="#" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="#" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <!-- Genre 4 -->
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">4</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Action</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Fokus pada adegan-adegan yang menegangkan, bersemangat, dan sering kali melibatkan pertarungan atau aksi fisik.</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="#" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="#" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>

                <!-- Genre 5 -->
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-1 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">5</p>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Thriller</p>
                    </div>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">Menampilkan situasi yang menegangkan, misteri yang membingungkan, dan konflik yang mengancam keselamatan karakter utama.</p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="#" class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Edit</a>
                            <a href="#" class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-800 ring-1 ring-inset ring-red-600/20">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ====== Table End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection

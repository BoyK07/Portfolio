<section class="text-white relative z-10 px-36 pb-48" id="projects">
    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-3 text-left">
            <h1 class="text-4xl text-white font-bold w-fit">Projects</h1>
            <h2 class="text-2xl text-gray-400 w-[60%] mb-5">Here are some projects that I have worked on.</h2>
            <a href="https://github.com/BoyK07?tab=repositories" target="_blank"
                class="bg-[#13152b] text-white border-2 border-white px-4 py-2 rounded-lg hover:bg-[#2c2e43]">All my
                projects</a>
            <div class="mt-4 flex gap-2">
                <button onclick="filterProjects('')" class="filter-btn bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-700">All</button>
                @foreach ($tags as $tag)
                    <button onclick="filterProjects('{{ $tag }}')" class="filter-btn bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-900">{{ $tag }}</button>
                @endforeach
            </div>
        </div>
        @foreach ($projects as $project)
            <div class="bg-[#2c2e43] p-4 rounded-lg w-full h-[220px] flex flex-col project" data-tags="{{ $project->tags }}">
                <div class="flex justify-between font-bold">
                    <h3 class="text-xl">{{ $project->title }}</h3>
                </div>
                <p class="text-gray-400 flex flex-col gap-1 flex-grow">
                    <span>{{ $project->description }}</span>
                <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                        @if ($project->url)
                            <a href="{{ $project->url }}" target="_blank" class="flex items-center">
                                <svg class="size-7 bg-white rounded-full" fill="#000000" height="200px" width="200px"
                                    version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 503.607 503.607"
                                    xml:space="preserve" stroke="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                        stroke="#CCCCCC" stroke-width="2.014428"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g transform="translate(1 1)">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M281.02,362.436c-6.715,1.679-16.787,5.036-29.377,5.036c-22.662,0-44.485-5.875-62.951-18.466 c-18.466-12.59-32.734-28.538-42.807-48.682L38.449,112.311l-7.554,12.59C9.911,162.672-1,204.639-1,250.803 c0,62.951,20.984,118.348,61.272,165.351c40.289,46.164,92.328,74.702,152.761,83.934l5.875,0.839l84.774-145.207L281.02,362.436 z M209.675,481.623c-53.718-9.233-99.882-35.252-136.813-77.22c-37.771-43.646-57.075-94.846-57.075-153.6 c0-37.771,7.554-73.023,22.662-104.079l90.649,161.154c10.911,21.823,26.859,40.289,48.682,54.557 c21.823,13.43,46.164,20.984,72.184,20.984c6.715,0,12.59-0.839,17.626-1.679L209.675,481.623z">
                                                    </path>
                                                    <path
                                                        d="M137.492,219.748c5.875-25.18,20.144-46.164,41.967-62.951c20.144-15.948,43.646-23.502,71.344-23.502h223.266 l-7.554-12.59c-20.984-36.092-50.361-64.63-90.649-88.131C338.095,9.911,296.128-1,250.803-1c-38.61,0-76.38,8.393-109.954,25.18 c-36.092,17.626-67.148,42.807-88.97,72.184l-3.357,4.197l83.934,137.652L137.492,219.748z M68.666,102.239 c20.144-26.02,47.003-47.003,79.738-62.951c31.056-15.948,65.469-23.502,102.4-23.502c41.967,0,81.416,10.911,115.829,31.895 c33.574,19.305,57.915,41.967,77.22,69.666H249.964c-31.056,0-57.915,8.393-81.416,26.859 c-19.305,15.108-33.574,32.734-41.967,53.718L68.666,102.239z">
                                                    </path>
                                                    <path
                                                        d="M484.141,155.957l-2.518-5.036H314.593l14.269,14.269c25.18,25.18,38.61,55.397,38.61,85.613 c0,24.341-6.715,47.003-20.984,67.148L239.052,502.607h14.269c68.826-0.839,127.58-26.02,176.262-74.702 c48.682-48.682,73.023-108.275,73.023-177.102C502.607,225.623,499.249,189.531,484.141,155.957z M417.833,416.154 c-41.967,41.967-91.489,64.63-149.403,68.826l91.489-157.797c15.948-23.502,23.502-48.682,23.502-76.38 c0-29.377-10.072-57.915-30.216-83.095h117.508c12.59,29.377,15.108,61.272,15.108,83.095 C485.82,314.593,463.157,369.99,417.833,416.154z">
                                                    </path>
                                                    <path
                                                        d="M150.082,250.803c0,54.557,46.164,100.721,100.721,100.721s100.721-46.164,100.721-100.721 s-46.164-100.721-100.721-100.721S150.082,196.246,150.082,250.803z M250.803,166.869c45.325,0,83.934,38.61,83.934,83.934 s-38.61,83.934-83.934,83.934s-83.934-38.61-83.934-83.934S205.479,166.869,250.803,166.869z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        @endif
                        @if ($project->github)
                            <a href="{{ $project->github }}" target="_blank" class="flex items-center">
                                <svg class="size-7" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 0C5.373 0 0 5.373 0 12c0 5.302 3.438 9.8 8.205 11.387.6.111.82-.261.82-.577 0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.757-1.333-1.757-1.09-.745.083-.73.083-.73 1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.998.108-.775.418-1.305.76-1.605-2.665-.305-5.466-1.332-5.466-5.93 0-1.31.467-2.38 1.235-3.22-.125-.303-.535-1.523.115-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.4 3-.405 1.02.005 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.655 1.653.245 2.873.12 3.176.77.84 1.235 1.91 1.235 3.22 0 4.61-2.805 5.62-5.475 5.92.43.37.81 1.1.81 2.22 0 1.605-.015 2.895-.015 3.285 0 .32.215.695.825.575C20.565 21.795 24 17.3 24 12c0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                    <div class="flex items-center gap-2">
                        @if ($project->tags)
                            @foreach (explode(',', $project->tags) as $tag)
                                <span class="bg-[#13152b] text-white px-2 py-1 rounded-lg">{{ $tag }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                </p>
            </div>
        @endforeach
    </div>
</section>

<script>
    function filterProjects(tag) {
        const projects = document.querySelectorAll('.project');
        const buttons = document.querySelectorAll('.filter-btn');

        buttons.forEach(button => {
            if (button.textContent === tag) {
                button.classList.add('bg-blue-500');
                button.classList.remove('bg-gray-700');
            } else {
                button.classList.remove('bg-blue-500');
                button.classList.add('bg-gray-700');
            }
        });

        projects.forEach(project => {
            const tags = project.getAttribute('data-tags').toLowerCase();
            if (tag === '' || tags.includes(tag.toLowerCase())) {
                project.style.display = 'block';
            } else {
                project.style.display = 'none';
            }
        });
    }
</script>

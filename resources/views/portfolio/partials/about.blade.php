<section class="text-white relative z-10 px-36 pb-72" id="about">
    <div class="grid grid-cols-4 gap-1">
        <div class="col-span-2 text-left">
            <h1 class="text-4xl text-white font-bold w-fit">Who am I?</h1>
            <p class="text-2xl text-gray-400 mr-4">
                <span>
                    My name is Boy, and I'm a <?php echo (new DateTime('now'))->diff(new DateTime('2005-06-07'))->y ?>-year-old software developer from the Netherlands.<br/>
                    I've been coding for about <?php echo (new DateTime('now'))->diff(new Datetime('2020-03-05'))->y ?> years, focusing mainly on web development.
                    I have experience in various programming languages and technologies,
                    including PHP, JavaScript, Python, Java, Docker, MySQL, C#, Laravel, CodeIgniter, and jQuery.<br/>
                    My favorites languages are PHP and Python. I especially like Python when it comes to automating tasks or services.
                    I'm currently studiying at Curio in Breda, where I am currently further specializing in web development
                </span>
            </p>
        </div>
        <div class="col-span-2 mx-auto w-full p-6 bg-[#13152ab9] rounded-lg shadow-lg h-96 overflow-y-auto border border-[#25283c]" id="terminal">
            <div id="output" class="text-sm font-mono pb-2 flex flex-col">
                <span>Welcome to the terminal.</span>
                <span>Type 'help' to see all available commands.</span>
            </div>
            <div class="flex items-center w-full">
                <span class="text-green-500 font-mono">guest@BoyK07:~$</span>
                <input type="text" id="input" class="w-full bg-transparent outline-none border-none text-white font-mono focus:outline-none focus:ring-0" autofocus autocomplete="off" />
            </div>
        </div>
    </div>
</section>
@vite('resources/js/terminal.js')

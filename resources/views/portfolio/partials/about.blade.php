<section class="text-white relative z-10 px-36 mb-72" id="about">
	<div class="flex w-full justify-between">
		<div class="text-left">
			<h1 class="text-4xl text-white font-bold w-fit">Who am I?</h1>
			<p class="text-2xl text-gray-400 w-3/4">
                <span>
                    My name is Boy, and I'm a <?php echo (new DateTime('now'))->diff(new DateTime('2005-06-07'))->y ?>-year-old software developer from the Netherlands.<br/>
                    I've been coding for about <?php echo (new DateTime('now'))->diff(new Datetime('2020-03-05'))->y ?> years, focusing mainly on web development.
                    I have experience in various programming languages and technologies,
                    including PHP, JavaScript, Python, Java, Docker, MySQL, C#, Laravel, CodeIgniter, and jQuery.<br/>
                    My favorites languages are PHP and Python. I especially like Python when it comes to automating tasks or services.
                    I'm currently studiying at Curio in Breda, where i am currently further specializing in web development
                </span>
            </p>
		</div>
		<div class="mx-auto w-full p-6 bg-[#13152ab9] rounded-lg shadow-lg h-96 overflow-y-auto border border-[#25283c]" id="terminal">
			<div id="output" class="text-sm font-mono pb-2 flex flex-col">
				<span>Welcome to the terminal.</span>
				<span>Type 'help' to see all available commands.</span>
			</div>
			<div class="flex items-center w-96">
				<span class="text-green-500 font-mono">guest@BoyK07:~$</span>
				<input type="text" id="input" class="w-full bg-transparent outline-none border-none text-white font-mono focus:outline-none focus:ring-0" autofocus autocomplete="off" />
			</div>
		</div>
	</div>
</section>
<script>
	const input = document.getElementById('input');
	const output = document.getElementById('output');
	const terminal = document.getElementById('terminal');

    const commands = {
    about: 'This is an interactive terminal created by BoyK07 to showcase my portfolio and skills.',
    clear: '',
    date: () => new Date().toString(),
        education: 'I have studied software development at <a href="https://curio.nl" target="_blank"><u>Curio</u></a> in Breda. I took my internships at <a href="https://www.modus-digital.com/" target="_blank"><u>Modus Digital</u></a>, where I programmed for <a href="https://all-instap.nl" target="_blank"><u>All-Instap</u></a>.',
        echo: '',
        experience: 'Current Position: Working on various web development projects and a CMS platform called All-Instap at Modus Digital.',
        games: 'The games I frequently play are Rocket League and Valorant. I like to play various games with my friends. Check out my <a href="https://steamcommunity.com/id/JustBoyM8" target="_blank"><u>Steam page</u></a>!',
        github: 'This is my GitHub: <a href="https://github.com/BoyK07" target="_blank"><u>https://github.com/BoyK07</u></a>',
        hobbies: 'In my free time, I enjoy automating various things, gaming, and working on personal development projects.',
        ls: 'Documents  Downloads  Projects  Skills  Experience',
        neofetch: `
            <b>Boy's PC</b><br/>
            --------------------<br/>
            <b>OS:</b> Windows 10<br/>
            <b>Host:</b> Web-based Terminal<br/>
            <b>Kernel:</b> 10.0.19044 (Windows 10 Pro)<br/>
            <b>Uptime:</b> 3 hours, 22 mins<br/>
            <b>Packages:</b> N/A (Windows system)<br/>
            <b>Shell:</b> PowerShell 7.2.3<br/>
            <b>Resolution:</b> 2560x1440 @ 165Hz, 2560x1440 @ 60Hz<br/>
            <b>DE:</b> Windows Explorer<br/>
            <b>WM:</b> DWM (Desktop Window Manager)<br/>
            <b>WM Theme:</b> Dark<br/>
            <b>Terminal:</b> Windows Terminal<br/>
            <b>CPU:</b> AMD Ryzen 9 7900X (12-core, 24-thread) @ 4.7GHz<br/>
            <b>GPU:</b> NVIDIA GeForce RTX 4070 OC<br/>
            <b>Memory:</b> 32GB DDR5`,
        os: 'Main OS: Windows 10<br/>Server OS: Ubuntu 22.04',
        pwd: '/home/guest/portfolio',
        skills: 'Languages: Python, PHP, JavaScript, Java.<br/>Frameworks: Laravel, CodeIgniter, TailwindCSS.<br/>Other Tools: Git, Docker.',
        whoami: 'My name is Boy. I am a software developer passionate about backend development.'
    };


	input.addEventListener('keydown', function(event) {
		if (event.key === 'Enter') {
			const command = input.value.trim();
			handleCommand(command);
			input.value = '';
		}
	});

	function handleCommand(command) {
        if (command) {
            command = command.toLowerCase();
        }

        let outputContent = '';

        if (command.startsWith('help')) {
            outputContent = "Available commands:<br>";

            const commandKeys = Object.keys(commands); // Get all command names as an array
            for (let i = 0; i < commandKeys.length; i++) {
                outputContent += commandKeys[i];

                // Add a comma for all commands except the last one
                if (i < commandKeys.length - 1) {
                    outputContent += ", ";
                }
            }
        }

        else if (command.startsWith('echo ')) {
            outputContent = command.slice(5);
        } else if (command.startsWith('clear')) {
            output.innerHTML = '';
        } else if (commands.hasOwnProperty(command)) {
            outputContent = typeof commands[command] === 'function' ? commands[command]() : commands[command];
        } else {
            outputContent = `Command not found: ${command}`;
        }

        if (!command.startsWith('clear')){
            appendOutput(`<span class="text-green-500 font-mono">guest@BoyK07:~$</span> ${command}`);
        }

        if (outputContent) {
            appendOutput(outputContent);
        }

        scrollToBottom();
    }

	function appendOutput(content) {
		output.innerHTML += `<div>${content}</div>`;
	}

	function scrollToBottom() {
		terminal.scrollTop = terminal.scrollHeight;
	}
</script>

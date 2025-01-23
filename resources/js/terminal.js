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

input.addEventListener('keydown', function (event) {
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

    if (command.startsWith('help') || command.startsWith('commands')) {
        outputContent = "Available commands:<br>";

        const commandKeys = Object.keys(commands);
        for (let i = 0; i < commandKeys.length; i++) {
            outputContent += commandKeys[i];
            if (i < commandKeys.length - 1) {
                outputContent += ", ";
            }
        }
    } else if (command.startsWith('echo ')) {
        outputContent = command.slice(5);
    } else if (command.startsWith('clear')) {
        output.innerHTML = '';
    } else if (commands.hasOwnProperty(command)) {
        outputContent = typeof commands[command] === 'function' ? commands[command]() : commands[command];
    } else if (!command) {
        outputContent = '';
    } else {
        outputContent = `Command not found: ${command}`;
    }

    if (!command.startsWith('clear')) {
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

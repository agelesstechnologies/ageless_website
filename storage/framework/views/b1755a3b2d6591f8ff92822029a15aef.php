<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Instagram Hack</title>
<style>
    body {
        background: #000;
        color: #0f0;
        font-family: monospace;
        text-align: center;
    }

    .box {
        margin-top: 80px;
    }

    input {
        padding: 10px;
        width: 250px;
        border: 2px solid #0f0;
        background: #000;
        color: #0f0;
        font-size: 18px;
    }

    button {
        margin-top: 20px;
        padding: 10px 30px;
        border: 2px solid #0f0;
        background: #000;
        color: #0f0;
        font-size: 18px;
        cursor: pointer;
    }

    #terminal {
        margin-top: 40px;
        width: 80%;
        height: 320px;
        border: 2px solid #0f0;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        text-align: left;
        overflow-y: auto;
        white-space: pre-line;
    }

    .hide {
        display: none;
    }
</style>
</head>
<body>

<h1>Instagram Hack portel</h1>


<div class="box">
    <input id="userInput" type="text" placeholder="Enter username">
    <br>
    <button onclick="startHack()">START HACK</button>
</div>

<div id="terminal" class="hide"></div>

<script>
// Fake random password generator
function generatePassword() {
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*";
    let pass = "";
    for (let i = 0; i < 12; i++) {
        pass += chars[Math.floor(Math.random() * chars.length)];
    }
    return pass;
}

function startHack() {
    const user = document.getElementById("userInput").value;
    if (!user.trim()) {
        alert("Enter  username!");
        return;
    }

    const fakePassword = generatePassword();

    document.getElementById("terminal").classList.remove("hide");
    const term = document.getElementById("terminal");
    term.innerHTML = "";

    const messages = [
        "[*] Connecting to InstaSim servers...",
        "[*] User located: " + user,
        "[*] Initializing  hack sequence...",
        "[*] Scanning virtual environment...",
        "[*] Bypassing imaginary firewall...",
        "[*] Generating spoof data packets...",
        "[*] Creating  password...",
        "",
        ">>> GENERATED PASSWORD: " + fakePassword + " <<<",
        "",
        ">>> HACKING  COMPLETE <<<",
        "Reminder:Passwords were accessed."
    ];

    let i = 0;
    function type() {
        if (i < messages.length) {
            term.innerHTML += messages[i] + "\n";
            i++;
            term.scrollTop = term.scrollHeight;
            setTimeout(type, 700);
        }
    }

    type();
}
</script>

<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\pages\test.blade.php ENDPATH**/ ?>
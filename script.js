// Elements for obtaining values
let val1El = document.getElementById("color1");
let val2El = document.getElementById("color2");
let val3El = document.getElementById("color3");
let val4El = document.getElementById("color4");
const nickName = document.getElementById("nickname");
const coloredNick = document.getElementById("coloredNick");
const coloredNickP = document.createElement("p");
let newNick = nickName.value;
let rgbtype = 'HTML';
let numberOfColors = 2;

// Initialize dark mode
document.getElementById('darkmode').checked = true;
darkMode();
updateSpitter();

function hideColors() {
    document.getElementById("color3").style.display = numberOfColors >= 3 ? "block" : "none";
    document.getElementById("label3").style.display = numberOfColors >= 3 ? "block" : "none";
    document.getElementById("color4").style.display = numberOfColors === 4 ? "block" : "none";
    document.getElementById("label4").style.display = numberOfColors === 4 ? "block" : "none";
}

function darkMode() {
    const isDark = document.getElementById('darkmode').checked;
    const elements = {
        types: document.getElementById('types'),
        numOfColors: document.getElementById('numOfColors'),
        body: document.body,
        graylabel1: document.getElementById('graylabel1'),
        error: document.getElementById('error'),
        color1: document.getElementById('color1'),
        color2: document.getElementById('color2'),
        color3: document.getElementById('color3'),
        color4: document.getElementById('color4'),
        nickname: nickName,
        spitter: document.getElementById('spitter')
    };

    if (isDark) {
        elements.types.classList.add("dark");
        elements.numOfColors.classList.add("dark");
        elements.body.classList.add('dark');
        elements.graylabel1.classList.replace("gray", "darkgray");
        elements.error.classList.replace("errortext", "darkerrortext");
        elements.color1.classList.add("darktextboxes");
        elements.color2.classList.add("darktextboxes");
        elements.color3.classList.add("darktextboxes");
        elements.color4.classList.add("darktextboxes");
        elements.nickname.classList.add("darktextboxes");
        elements.spitter.classList.add("darktextboxes");
    } else {
        elements.types.classList.remove("dark");
        elements.numOfColors.classList.remove("dark");
        elements.body.classList.remove('dark');
        elements.graylabel1.classList.replace("darkgray", "gray");
        elements.error.classList.replace("darkerrortext", "errortext");
        elements.color1.classList.remove("darktextboxes");
        elements.color2.classList.remove("darktextboxes");
        elements.color3.classList.remove("darktextboxes");
        elements.color4.classList.remove("darktextboxes");
        elements.nickname.classList.remove("darktextboxes");
        elements.spitter.classList.remove("darktextboxes");
    }
}

function showError() {
    const spitter = document.getElementById('spitter');
    if (spitter.textContent.length > 800) {
        spitter.style.height = "70px";
        spitter.style.marginBottom = "5px";
        document.getElementById('error').style.display = "block";
    } else {
        spitter.style.height = "95px";
        spitter.style.marginBottom = "10px";
        document.getElementById('error').style.display = "none";
    }
}

function hex(c) {
    let s = "0123456789abcdef";
    let i = parseInt(c);
    if (i == 0 || isNaN(c)) return "00";
    i = Math.round(Math.min(Math.max(0, i), 255));
    return s.charAt((i - i % 16) / 16) + s.charAt(i % 16);
}

function convertToHex(rgb) {
    return hex(rgb[0]) + hex(rgb[1]) + hex(rgb[2]);
}

function trim(s) {
    return (s.charAt(0) == '#') ? s.substring(1, 7) : s;
}

function convertToRGB(hex) {
    let color = [];
    color[0] = parseInt((trim(hex)).substring(0, 2), 16);
    color[1] = parseInt((trim(hex)).substring(2, 4), 16);
    color[2] = parseInt((trim(hex)).substring(4, 6), 16);
    return color;
}

function generateColor(colorStart, colorEnd, colorCount) {
    let start = convertToRGB(colorStart);
    let end = convertToRGB(colorEnd);
    let len = colorCount;
    let alpha = 0.0;
    let result = [];
    for (let i = 0; i < len; i++) {
        let c = [];
        alpha += (1.0 / len);
        c[0] = start[0] * alpha + (1 - alpha) * end[0];
        c[1] = start[1] * alpha + (1 - alpha) * end[1];
        c[2] = start[2] * alpha + (1 - alpha) * end[2];
        result.push(convertToHex(c));
    }
    return result;
}

function combineColors(gradient1, gradient2) {
    return gradient1.concat(gradient2);
}

function updateSpitter(event) {
    nickName.value = nickName.value.replace(/\s+/g, ' ').trim();
    newNick = nickName.value || 'NET FREE';
    let half = Math.ceil(newNick.length / 2);
    let thirds = Math.ceil(newNick.length / 3);
    let gradientHalf1 = generateColor(val2El.value, val1El.value, half);
    let gradientHalf2 = generateColor(val3El.value, val2El.value, half);
    let gradientThirds1 = generateColor(val2El.value, val1El.value, thirds);
    let gradientThirds2 = generateColor(val3El.value, val2El.value, thirds);
    let gradientThirds3 = generateColor(val4El.value, val3El.value, thirds);
    let colors;

    if (numberOfColors === 2) {
        colors = generateColor(val2El.value, val1El.value, newNick.length);
    } else if (numberOfColors === 3) {
        colors = combineColors(gradientHalf1, gradientHalf2);
    } else if (numberOfColors === 4) {
        let temp = combineColors(gradientThirds1, gradientThirds2);
        colors = combineColors(temp, gradientThirds3);
    }

    let nickspaced = newNick.split("");
    let essentialscolorsout = [];
    let luckpermscolorsout = [];
    let othercolorsout = [];
    let colorspp = ('&' + colors.join('').split('').join('&')).match(/.{1,12}/g) || [];

    for (let i = 0; i < newNick.length; i++) {
        colorspp[i] = colorspp[i]?.replace('&', '&x&') || '';
        if (nickspaced[i] === " ") {
            essentialscolorsout[i] = ' ';
            luckpermscolorsout[i] = ' ';
            othercolorsout[i] = ' ';
        } else {
            essentialscolorsout[i] = `<span style="color:#${colors[i]}">${nickspaced[i]}</span>`;
            luckpermscolorsout[i] = `{${colors[i]}}${nickspaced[i]}`;
            othercolorsout[i] = `${colorspp[i]}${nickspaced[i]}`;
        }
    }

    let output = '';
    if (rgbtype === 'HTML') {
        output = essentialscolorsout.join('');
    } else if (rgbtype === 'Essentials (&#rrggbb)') {
        output = essentialscolorsout.join('');
    } else if (rgbtype === 'LuckPerms {#rrggbb}') {
        output = luckpermscolorsout.join('');
    } else if (rgbtype === 'Outros (&x&r&r&g&g&b&b)') {
        output = othercolorsout.join('');
    }

    document.getElementById("spitter").innerHTML = `<h1 style="text-align:center">${output}</h1>`;
    displayColoredName(newNick, colors);
    showError();
}

async function displayColoredName(nickName, colors) {
    coloredNickP.innerHTML = "";
    for (let i = 0; i < nickName.length; i++) {
        const coloredNickSpan = document.createElement("span");
        coloredNickSpan.style.color = `#${colors[i]}`;
        coloredNickSpan.textContent = nickName[i];
        coloredNickP.append(coloredNickSpan);
    }
    coloredNick.innerHTML = '';
    coloredNick.append(coloredNickP);
}


function open_preview()
{
    window.open('http://localhost/EmurasEX/domain_account/writers_account/preview/');
}

document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};

function open_login()
{
    window.open('http://localhost/EmurasEX/login/', '_self');   
}

function open_register()
{
    window.open('http://localhost/EmurasEX/registration/', '_self');
}

function open_read_more()
{
    window.open('http://localhost/EmurasEX/about/', '_self');
}

function open_home_page()
{
    window.open('http://localhost/EmurasEX/home/', '_self');
}

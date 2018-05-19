$("#account").on("keyup",check_account);
document.getElementById("signup").addEventListener("click", do_click);

function check_account(){
    if(!isEmpty($(this).val()) && !isBlank($(this).val())){
        $.ajax({
            type : "POST",
            url : "./php/check_account.php",
            data : 
            {
                account: $(this).val()
            },
            dataType : 'html' //設定該網頁回應的會是 html 格式
          }).done(function(data) {
            if(data)
            {   
                alert("此帳號已被申請過");
            }
          }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);                
                alert("有錯誤產生，請看console");
          });
    }
}

function do_click(event) {
    var account = document.getElementById("account").value;
    var passwd = document.getElementById("passwd").value;
    var passwd2 = document.getElementById("passwd2").value;
    var nickname = document.getElementById("nickname").value;
    var email = document.getElementById("email").value;
    var something = document.getElementById("something").value;

    if (is_empty_or_blank(account, passwd, passwd2, nickname, email))
        alert("Please fill in every input field");
    else if (passwd != passwd2)
        alert("Password inconsistent \nplease check your password again !");
    else if (!valid(email))
        alert("Please fill in valid email");
    else do_ajax(account, passwd, nickname, email, something);
}

function do_ajax(account, passwd, nickname, email, something) {
    $.ajax({
        type: "POST",
        url: "./php/insert.php",
        data: {
            account: account,
            passwd: passwd,
            nickname: nickname,
            email: email,
            something: something
        },
        success: showResult,
        error: onError
    });
}

function showResult(data) {
    if(data=="帳號創建成功！"){
        var current_url = document.location.toString();
        var next_url = current_url.replace("/admin/index.php","index.php");

        alert(data+"\n馬上為您返回主頁 ！");    
        setTimeout(function () {
            window.location.href = next_url;
        }, 100)
    }else{
        alert(data);
    }
}

function onError(error) {
    console.log("error: ", error);
}

function isEmpty(str) {
    return (!str || 0 === str.length);
}

function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}

function is_empty_or_blank(account, passwd, passwd2, nickname, email) {
    return (isEmpty(account) || isEmpty(passwd) || isEmpty(passwd2) || isEmpty(nickname) || isEmpty(email) ||
        isBlank(account) || isBlank(passwd) || isBlank(passwd2) || isBlank(nickname) || isBlank(email));
}

function valid(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
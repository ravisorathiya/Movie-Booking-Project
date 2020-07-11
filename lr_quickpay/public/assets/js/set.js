

//var base_url = "http://localhost/lr_quickpay/";
var base_url = "";
function email() {
  
    var name = $('#subemail').val();
    if (name != "")
    {
        var ptn = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
        var path = base_url + "Backend";

        if (name.match(ptn))
        {
            $data = {email: name, _token: token};
            $.post(path, $data, function (data) {
                $("#msg").html(data);
            });
        } else
        {
            var msg = "Enter Valid Email";
            document.getElementById('msg').innerHTML = msg;
        }
    } else
    {
        var msg = "Please Enter The Email";
        document.getElementById('msg').innerHTML = msg;
    }
}
//var path = "http://localhost/lr_quickpay/";
var path = "";
function set_combo(action, id, token)
{
    $data = {id: id, _token: token};
//    alert(path + action);
    $.post(path + action, $data, function (data) {

        $("#" + action).html(data);
    });
}
function insert()
{
    var path = base_url + "Register";
    var email = $('#email').val();
   
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var cpassword = $('#cpassword').val();
    var emailptn = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var mobileptn = /^[1-9][0-9]+$/;
    if (email != "")
    {
        if (email.match(emailptn))
        {
            var msg = "";
            document.getElementById('emailmsg').innerHTML = msg;
            if (mobile != "")
            {
                var msg = "";
                document.getElementById('mobilemsg').innerHTML = msg;

                if (mobile.match(mobileptn))
                {
                    if (mobile.length == 10)
                    {
                        var msg = "";
                        document.getElementById('mobilemsg').innerHTML = msg;
                        if (password != "")
                        {
                            if (password.length >= 8 && password.length <= 16)
                            {
                                var msg = "";
                                document.getElementById('passmsg').innerHTML = msg;
                                if (password == cpassword)
                                {

                                    var msg = "";
                                    document.getElementById('cpassmsg').innerHTML = msg;
                                    $data = {email: email, mobile: mobile, password: password, _token: token};
                                    $.post(path, $data, function (data) {
                                        alert(data);
                                        var msg = "";
                                        document.getElementById('email').value = msg;
                                        document.getElementById('mobile').value = msg;
                                        document.getElementById('password').value = msg;
                                        document.getElementById('cpassword').value = msg;


                                    });



                                } else
                                {
                                    var msg = "Password Does Not Match";
                                    document.getElementById('cpassmsg').innerHTML = msg;

                                }
                            } else
                            {
                                var msg = "password must be of  to  16 characters";
                                document.getElementById('passmsg').innerHTML = msg;
                            }
                        } else
                        {
                            var msg = "Please Enter The Password";
                            document.getElementById('passmsg').innerHTML = msg;
                        }
                    } else
                    {
                        var msg = "Please Enter 10 Digit Number";
                        document.getElementById('mobilemsg').innerHTML = msg;
                    }

                } else
                {

                    var msg = "Please Enter Valid Number";
                    document.getElementById('mobilemsg').innerHTML = msg;

                }
            } else
            {
                var msg = "Please Enter The Mobile";
                document.getElementById('mobilemsg').innerHTML = msg;
            }
        } else
        {
            var msg = "Please Enter The Valid Email";
            document.getElementById('emailmsg').innerHTML = msg;
        }
    } else
    {
        var msg = "Please Enter The Email";
        document.getElementById('emailmsg').innerHTML = msg;
    }

}

function login()
{
    var path = base_url + "Login";
    var email = $('#lemail').val();
   
    var password = $('#lpassword').val();
    var svp = $('#remember-me').val();

    $data = {email: email, password: password, svp: svp, _token: token};
    $.post(path, $data, function (data) {

        if (data == "2") {
            window.location = base_url + "User-Profile";
        } else
        {
            document.getElementById('lmsg').innerHTML = data;
        }

    });

}
function check()
{
    document.getElementById('remember-me').value = "check";
}
var gender;
function mcheck()
{
    document.getElementById('male').value = "male";
    gender = "male";
}
function fcheck()
{
    document.getElementById('female').value = "female";
    gender = "female";
}
function pupdate()
{
    var path = base_url + "Profile-Update";
    var name = $('#name').val();

    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var male = $('#male').val();
    var female = $('#female').val();

    var pupdate = $('#pupdate').val();

    var dob = $('#birthdate').val();
    var city = $('#city').val();
    $data = {name: name, mobile: mobile, email: email, male: male, female: female, gender: gender, dob: dob, city: city, _token: token};
    $.post(path, $data, function (data) {
        alert(data);
    });
}

function addseat(v, token)
{
    var path = base_url + "Seating";
    
    if (v == "seat")
    {
        if (i == 65)
        {
            var res = String.fromCharCode(i++);
            $("#preview").append("<br><b style='font-size:12px;margin-right:22px;'>" + res + "</b>");
        }
        $data = {id: '1', _token: token};

        $.post(path, $data, function (data) {

        });
        $("#preview").append("<a class='seat text-center'>" + ++z + "</a> ");

    }
    if (v == 'gallry')
    {
        $data = {id: '2', _token: token};

        $.post(path, $data, function (data) {

        });
        $("#preview").append("<a class='seatspace'></a>&nbsp;&nbsp;");
    }
    if (v == "enter")
    {
        $data = {id: '0', _token: token};

        $.post(path, $data, function (data) {
//         alert(data);
        });
        var res = String.fromCharCode(i++);
        $("#preview").append("<br><div style='display: inline-block;width: 50px; '><b style='font-size:12px;margin-right:22px;'>" + res + "</b></div>");
        z = 0;
    }
    if(v == "back")
    {
        $data = {id: 'back', _token: token};
        $.post(path, $data, function (data) {
//         alert(data);
        });
        $("#preview").find('a').last().remove();
    }
    if (v == "")
    {
        $data = {id: '', _token: token};

        $.post(path, $data, function (data) {

        });
        $("#preview").html("");
        i = 65;
        z = 0;
    }

}
function myfunction()
{
//    var base_url = "http://localhost/lr_quickpay/";
    var epassword = $('#epassword').val();
    var npassword = $('#npassword').val();
    var rpassword = $('#rpassword').val();
    var ptn = /^[a-zA-z0-9]{8,16}$/;
     var path = base_url + "User-Pchange";
     
    if(epassword != "")
    {
        if(npassword.match(ptn))
        {
            
                 var msg="";
                 document.getElementById('pmsg').innerHTML = msg;
                 if(npassword == rpassword)
                 {
                      var msg="";
                      document.getElementById('pmsg').innerHTML = msg;
                       $data = {epass:epassword,npass:npassword,rpass:rpassword, _token: token};
                       $.post(path, $data, function (data) {
                           if(data=="true")
                           {
                               window.location = base_url + "Logout";
                           }
                           else{
                               document.getElementById('pmsg').innerHTML = data;
                           }
                            
                        });
                     
                 }
                 else
                 {
                        var msg="Password Does Not Match";
                      document.getElementById('pmsg').innerHTML = msg;
                 }
                
        }
        else
        {
            var msg="Please Enter Valid Password";
            document.getElementById('pmsg').innerHTML = msg;
        }
    }
    else
    {
        var msg="Please Enter The Password";
       document.getElementById('pmsg').innerHTML = msg;
    }
     
       
}
$b=1;
function booking(val,name)
{
   var path = "http://localhost/lr_quickpay/Total-Seat";
 
     var modal = document.getElementById('myModal');
    if(name=="select")
    {  
        document.getElementById('bookbtn').style="display:block";
        if($b<=10)
        {   
           
                $data = {val:val,name:name, _token: token};

                $.post(path, $data, function (data) 
                {
//                     alert(data);
                });
            document.getElementById(val).style="background:#0071cc;color:white;border:1px solid #0071cc;font-size:10px";
             $("#"+val).attr("onclick","booking('"+val+"','disselect')");
             $b++;
          
        }
        else
        {
            modal.style.display = "block";
        }
    }
    else
    {   
        
        document.getElementById(val).style="background:white;border:1px solid #c8c8c8;font-size:10px";
         $("#"+val).attr("onclick","booking('"+val+"','select')");      
         $data = {val:val,name:name, _token: token};

                $.post(path, $data, function (data) 
                {
//                     alert(data);
                });
         $b--;
//         document.getElementById('bookbtn').innerHTML = "Book Now ("+ $b +"Tickets )";
         
    }
    
     if($b==2)
    {
        document.getElementById('bookbtn').innerHTML = "Book Now ( "+ ($b-1) +" Ticket )";
    }
    else
    {
        document.getElementById('bookbtn').innerHTML = "Book Now ( "+ ($b-1) +" Tickets )";
    }
    if($b==1)
    {
        document.getElementById('bookbtn').style="display:none";
    }
}

function chnage(name,id,token)
{
    $data={action:name,id:id,_token:token};
    $.post(path+"Status", $data, function (data) 
    {
        $("#"+name).html(data);
    });
}


$xpath="http://localhost/lr_quickpay/";
function apply(id,rs,token,code,price)
{   
    document.getElementById('myModal').style.display = "none";
    $data={rs:rs,id:id,_token:token};

    $.post($xpath+"Promo", $data, function (data) 
    {
       if(data==0)
       {
           document.getElementById('success').style.display = "none";
           document.getElementById('btn-price').innerHTML="Click To Pay Rs."+ rs
         document.getElementById('error').style.display = "block";
       }
       else
       {
           document.getElementById('error').style.display = "none";
           document.getElementById('success').style.display = "block";
          $("#success").html(code+"&nbsp;&nbsp Apply Promo" + "&nbsp;&nbsp : <p style='float:right'>&nbsp;&nbsp  - ₹ "+price+"</p>");
           document.getElementById('btn-price').innerHTML="Click To Pay Rs."+ data
       }
       
    });
   
}

function forgot()
{
   
    var path = base_url + "Forgot";
   var email = $('#lemail').val();

    $data = {email: email,_token: token};
    $.post(path, $data, function (data) {

        if(data==2)
        {
            alert("Please Enter Email Id");
        }

    });
}

function autopass()
{
    var base_url = "http://localhost/lr_quickpay/";
    var path = base_url + "Autopss";
    $data = {_token: token};
    $.post(path, $data, function (data) {

      document.getElementById('password').value=data

    });
}

function checkemail()
{
    var base_url = "http://localhost/lr_quickpay/";
    var path = base_url + "Checkemail";
    $data = {_token:token};
    $.post(path, $data, function(data){

      alert(data);

    })
}

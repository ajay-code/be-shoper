$(document).ready(function(){
				// Checkout page coding
				$("#checkMeOut").on('submit',(function(e){
					e.preventDefault();
					$.post("checkSession.php",{},function(data){
						if(data == 1){
							//$("#checkMeOut").submit();
							document.getElementById("checkMeOut").submit();
						}else if(data == 2){
							login('open');
						}
					});
				}));
				//Hidding shipping details				
				$("[name=shipping]").change(function(){
					if($(this).is(':checked')){
						$("#ship").slideUp(500);
						$("#ship").html('');
					}else{
						divi = '<div class="chek_row bold"><center>Shipping Information<center></div><div class="chek_row"><div class="chek_text">First Name</div><input type="text" required  placeholder="Enter Firstname" class="chek_box" id="sfirstname" name="sfirstname"/></div><div class="chek_row"><div class="chek_text">Last Name</div><input type="text" required placeholder="Enter Lastname" class="chek_box" id="slastname" name="slastname"/></div><div class="chek_row"><div class="chek_text">Address</div><textarea rows="4" cols="25" required id="saddress" name="saddress"></textarea></div><div class="chek_row"><div class="chek_text">City</div><input type="text" required placeholder="Enter City" class="chek_box" id="scity" name="scity"/></div><div class="chek_row"><div class="chek_text">State</div><input type="text" required placeholder="Enter State" class="chek_box" id="sstate" name="sstate"/></div><div class="chek_row"><div class="chek_text">Zip/Postal Code</div><input type="text" required placeholder="Enter Postal Code" class="chek_box" id="sCode" name="sCode"/></div><div class="chek_row"><div class="chek_text">Country</div><input type="text" required class="chek_box" placeholder="Enter Country" id="scountry" name="scountry"/></div><div class="chek_row"><div class="chek_text">Phone</div><input type="text" required class="chek_box" placeholder="Enter Phone Number" id="sphone" name="sphone"/></div><div class="chek_row"><div class="chek_text">Email</div><input type="email" class="chek_box" required placeholder="Enter Email" id="semail" name="semail"/></div>';
						$("#ship").html(divi).slideDown(500);
					}
				});
				
				$("#name").focus();
				$.post("ajaxfiles/fac.php",{wc:'div',active:1},function(data){
			     $(".cat-container").html(data).slideDown(1000);
				});
				$.post("pics.php",{},function(data){
				//alert(data);
			     $(".pics_container").html(data).slideDown(1000);
				});
				
				gnTkn();
			});
			

//function for generating tokens 
function gnTkn(){
	$.post('ajaxfiles/generatetoken.php',{},function(data){
		//alert(data);
		$("#p_tk_en").val(data);
	});
}		
function getAllCartItems(){
	dt=$("#fillMe").html();
	if(dt == ""){$(".loader").fadeIn(1000);}
	$.post("ajaxfiles/viewCart.php",{},function(data){
		//alert(data);
		$("#fillMe").html(data).slideDown(500);
		$(".loader").fadeOut(1000);
	});
}
// For updating Cart
function updatecart(id){
	//alert('d');
	$("div[id^='fillsave']").css("display","none");
	$("#fillsave"+id).css("display","block");
	$("input[id^='qty']").removeAttr("readonly");	
	$("#qty"+id).removeAttr("readonly");	
}
function updateqty(id){
qid = id;
//alert(qid);
qty = $("#qty"+id).val();
if(qty > 5){
	alert("Not Allowed more than 5");
	return false;
}
//alert(qty);
	$.post("ajaxfiles/updateCart.php",{id:id,qty:qty},function(data){
	//alert(data);
		if(data == "1"){
			alert("Quantity Updated");
		}
	$("#fillsave"+id).css("display","none");
	$("#qty"+id).attr('readonly',true);	
	
});
}
	//function for cart
	function cart(nm){
		if(nm == "open"){
			$("#cart").fadeIn(1000);
			$("#hide").slideDown(1000);
			getAllCartItems();
		}else if(nm == "close"){
			$("#cart").fadeOut(500);
			$("#hide").slideUp(500);
		}
	}
// fuction for search text box
function searchproduct(value){
				//alert(value);

productname=value;
				//alert(productname);

p_tk_en= $("#p_tk_en").val();
$.post("searchproduct.php",{productname:productname,p_tk_en:p_tk_en},function(data){
		//alert(data);
		$("#left_main_container").html(data);
		gnTkn();
	});
}

function check(event,value){
			if(value == ""){
				$("#result").css("display","none");
				return false;
			}
			if(event.keyCode == 40){
				$("#result").focus();
			}else{
				$.get("ajaxfiles/search.php",{
					name:value
					},function(data){
					if(data != ""){
						$("#result").fadeIn(500);
						$("#result").html(data);
					}else{
						$("#result").css("display","none");
					}
				} );
			}
	}
	function sel(value,event){
		if(event.keyCode == 13 || event.keyCode == 0){
				//alert(value);
				$("#name").val(value);
				$("#result").fadeOut(1000);
				$("#result").css("display","none");
				 searchproduct(value);
			}
	}
	//function for login
	function login(nm){
		if(nm == "open"){
			$("#login").fadeIn(1000);
			$("#hide").slideDown(1000);
			
			}
			else if(nm == "close"){
			$("#login").slideUp(500);
			$("#hide").fadeOut(500);	
			}
	}
// function for signup 
	function signup(nm){
	if(nm == "open"){
		$("#signup").fadeIn(1000);
		$("#hide").slideDown(1000);
			ht='<input type="text" class="sign_inpt" id="email" name="email" placeholder="Enter Email"/>';
			hp='<input type="password" class="sign_inpt"  id="password" name="password" placeholder="Enter Password"/>';
			hr='<input type="password" class="sign_inpt"  id="repeat" name="repeat" placeholder="Repeat"/>';
			$("#fill_html").html(ht);
			$("#fill_pass").html(hp);
			$("#fill_repeat").html(hr);
		
		}else if(nm == "close"){
		$("#signup").slideUp(500);
		$("#hide").fadeOut(500);
		$("#fill_html").html("");
		$("#fill_pass").html("");
		$("#fill_repeat").html("");	
	}
}

	function check_signup(){
		$("#login").slideUp(500);
		signup('open');
}


//Email validation function
function validateEmail(email){
	var email= document.getElementById("email").value;
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	if (atpos < 1 || dotpos<atpos+2 || dotpos+2 >= email.length) {
		return 0;	
	}else{
		return 1;
	}
}
//Confirm Password 
function confirmPass(p1,p2){
	if(p1 == p2)return 1;
	else return 0;
}
// Signup Insertion
function insertSignUp(){
		email =$("#email").val();
		username ="na";
		sq="na";
		sa="na";
		p1 =$("#password").val();
		p2 = $("#repeat").val();
		p_tk_en= $("#p_tk_en").val();
		if(!validateEmail(email)){ 
			alert("Please enter valid email");
			$("#email").focus();
			return false;
		}
		if(!confirmPass(p1,p2)) {
			alert('Password does not match.');
			$("#password").focus();
			return false;
		}
		if(p1.length <6 || p1.length >15){
			alert('Length of password should be less than 15 and greater than 5');
			$("#password").focus();
			return false;
		}
		Isadmin="2";
		Isactive="1";
		$.post("ajaxfiles/insertcreate_user.php",{
		username:username,
		password:p2,
		email:email,
		Isadmin:Isadmin,
		Isactive:Isactive,
		sq:sq,
		sa:sa,
		p_tk_en:p_tk_en
	},function(data){
		if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			//gnTkn();
			window.location='index.php';
		}else if(data == 0){
			alert("User Already Registered");
			$("#email").focus().val('');
			return false;
		}else{
			clearAll();
			alert(data);
			gnTkn();
		}
	});
	
}
//For Clearing all inputs
function clearAll()
{
	$("input[type=password],input[type=text],input[type=date],textarea,input[type=email]").val('');
	$("select").val('0');
	
}
function subcat(id){
pid=id;
$("#left_main_container").animate({opacity:0.1},500);
$.post("getproducts.php",{id:pid},function(data){
	//	alert(data);
		$("#left_main_container").html(data).delay(1000).animate({opacity:1});
	});
}
function product(id){
pid=id;
p_tk_en= $("#p_tk_en").val();
$.post("description.php",{id:pid,p_tk_en:p_tk_en},function(data){
		//alert(data);
		$("#left_main_container").html(data);
		$('html,body').animate({scrollTop:0},800);
		gnTkn();
	});
}


//Validation functions start here !!!
//Email validation function
function validateEmail(email){
	var email= document.getElementById("email").value;
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	if (atpos < 1 || dotpos<atpos+2 || dotpos+2 >= email.length) {
		return 0;	
	}else{
		return 1;
	}
}

//Phone number validation function
/*function phoneNumber(no){
	var phoneno = /^\d{10}$/;
	if((no.value.match(phoneno)) return 1;  
      else return 0;  
} */     



//Pin Code Validation function
function pinCode(pc){
	var zip_regex = /^[0-9]+$/;
}
//Address validation function
function address(add){
	var add_regex = /^[0-9a-zA-Z]+$/;
}
//Username validation function
function userName(un){
	var name_regex = /^[a-zA-Z\s]+$/;
	if(un.match(name_regex)) return 1;
	else return 0;
}
function insert(){
			email =$("#email").val();
			firstname = $("#firstname").val();
			lastname = $("#lastname").val();
			phone = $("#phone").val();
			address = $("#address").val();
			state = $("#state").val();
			city = $("#city").val();
			country = $("#country").val();
			Code = $("#Code").val();
			
			semail =$("#semail").val();
			sfirstname = $("#sfirstname").val();
			slastname = $("#slastname").val();
			sphone = $("#sphone").val();
			saddress = $("#saddress").val();
			sstate = $("#sstate").val();
			scity = $("#scity").val();
			scountry = $("#scountry").val();
			sCode = $("#sCode").val();
		if(!validateEmail(email)){ 
			alert("Please enter valid email");
			$("#email").focus();
			return false;
		}
		if(!userName(firstname)){
			alert('Username should contain only alphabets');
			$("#username").focus();
			return false;
		}
		if(!userName(lastname)){
			alert('Username should contain only alphabets');
			$("#username").focus();
			return false;
		}
		if(!address(address)){
			alert('Please fill address properly');
			$("#address").focus();
			return false;
		}
		if(!pinCode(Code)){
			alert('Please fill Pin Code properly');
			$("#Code").focus();
			return false;
		}
		if(!phoneNumber(phone)){
			alert('Please fill phone number properly');
			$("#phone").focus();
			return false;
		}

}

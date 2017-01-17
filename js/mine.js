updateId = 0;
	flag =1;

//function for generating tokens 
function gnTkn(){
	$.post('../ajaxfiles/generatetoken.php',{},function(data){
		//alert(data);
		$("#p_tk_en").val(data);
	});
}
// Validate All and call to userdefined function
function validateAll(name){
		$("input[type=text],input[type=email],input[type=password]").each(function(){
			if($(this).val()== ""){
				flag =0;
					$(this).parent('.box_container').find('div').remove('.validate');
					title = $(this).attr('placeholder');
					if(title == "Search"){}else{
						div ="<div class='validate'>Required</div>";
						$(this).parent('.box_container').append(div);
						$(this).parent('.box_container').find('.validate').html("Required").css("color","#ff0000");
						$(this).css("border-color","#ff0000");
						return false;
					}
			}else{
					flag = 1;
			}//
			
		});
		if(name == "userlogin"){
			insertUserAccount();
		}else if(name == "userpersonal"){
			insertUserPersonal();
		}else if(name == "UserMenu"){
			insertUserMenu();
		}else if(name == "categoryname"){
			insertCategory();
		}else if(name == "UserPages"){
			insertUserPages();
		}else if(name == "subcategory"){
			insertsubcategory();
		}else if(name == "products"){
			insertproducts();
		}
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
function phoneNumber(no){
	
}
//Password validation function
function password(p)
{

}
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
//Confirm password 
function confirmPass(p1,p2){
	if(p1 == p2)return 1;
	else return 0;
}
//Validation functions endz here !!!

// Insert User Account and updateId User Account details
function insertUserAccount(){
if(flag ==1){
		if(updateId == 0){
		email =$("#email").val();
		username =$("#username").val();
		sq=$("#sq").val();
		sa=$("#sa").val();
		p1 =$("#password").val();
		p2 = $("#p2").val();
		p_tk_en= $("#p_tk_en").val();
		if(!validateEmail(email)){ 
			alert("Please enter valid email");
			$("#email").focus();
			return false;
		}
		if(!userName(username)){
			alert('Username should contain only alphabets');
			$("#username").focus();
			return false;
		}//
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
		if(sq == 0){
			alert('Please select any security question');
			$("#sq").focus();
			return false;
		}
		Isadmin=$("input[name=Isadmin]:checked").val();
		Isactive=$("input[name=Isactive]:checked").val();
		$.post("../ajaxfiles/insertcreate_user.php",{
		username:username,
		password:password,
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
	}else if(updateId == 1){
				Isadmin=$("input[name=Isadmin]:checked").val();
				Isactive=$("input[name=Isactive]:checked").val();
				$.post("../ajaxfiles/updateUser.php",{
				id:$("#updateId").val(),
				username:$("#username").val(),
				password:$("#password").val(),
				email:$("#email").val(),
				Isadmin:Isadmin,
				Isactive:Isactive,
				sq:$("#sq").val(),
				sa:$("#sa").val(),
				p_tk_en:$("#p_tk_en").val()
				},function(data){
				if(data == -1){
				alert("Do not try these attacks.Your IP has been sent.");
				window.location='index.php';
				}
				else{
						clearAll();
						alert(data);
						$("#insert").val("Insert");
						updateId =0;
						gnTkn();
					}
				
			});
	}
}
}
// For fetching all Categories
function fetchCategories(id,wc,active){
	wc = wc || 'nothing';
	$.post("../ajaxfiles/fac.php",{wc:wc,active:active},function(data){
		$("#"+id).html(data);
	});
}
// For fetching all Menus
function fetchMenu(id,wc,active){
	wc = wc || 'nothing';
	$.post("../ajaxfiles/menu.php",{wc:wc,active:active},function(data){
		$("#"+id).html(data);
	});
}
// For fetching all Pages
function fetchPages(id,wc,active){
	wc = wc || 'nothing';
	$.post("../ajaxfiles/page.php",{wc:wc,active:active},function(data){
		$("#"+id).html(data);
	});
}
// For fetching all Products
function fetchProducts(id,wc,active){
	wc = wc || 'nothing';
	$.post("../ajaxfiles/Products.php",{wc:wc,active:active},function(data){
		$("#"+id).html(data);
	});
}
// For fetching all subcategories
function fetchSubCategories(id,wc,active){
	wc = wc || 'nothing';
	$.post("../ajaxfiles/fasc.php",{wc:wc,active:active},function(data){
		$("#"+id).html(data);
		//alert(data);	
	});
}
// Edit User account details
function popup(nm,pagename){
	if(nm == "open"){
		$("#popup").fadeIn(1000);
		$("#hide").slideDown(1000);
		if(pagename == "category"){
			ht='<select id='+pagename+'></select>';
			$("#fill_html").html(ht);
			$("#match").attr('title',pagename);
			fetchCategories("category","",0);
		}else if(pagename == "subcategory1"){
			ht='<select id='+pagename+'></select>';
			$("#fill_html").html(ht);
			$("#match").attr('title',pagename);
			fetchSubCategories("subcategory1","",0);
		}else if(pagename == "menu"){
			ht='<select class="pop_inpt" id='+pagename+'></select>';
			$("#fill_html").html(ht);
			$("#match").attr('title',pagename);
			fetchMenu("menu","",0);
		}else if(pagename == "pages"){
			ht='<select class="pop_inpt" id='+pagename+'></select>';
			$("#fill_html").html(ht);
			$("#match").attr('title',pagename);
			fetchPages("pages","",0);
		}else if(pagename == "products"){
			ht='<select class="pop_inpt" id='+pagename+'></select>';
			$("#fill_html").html(ht);
			$("#match").attr('title',pagename);
			fetchProducts("products","",0);
		}else{
			ht='<input type="text" class="pop_inpt" id="'+pagename+'" placeholder="Enter Email"/>';
			$("#fill_html").html(ht);
			$("#match").attr('title',pagename);
		}

	}else if(nm == "close"){
		$("#popup").slideUp(500);
		$("#hide").fadeOut(500);
		$("#fill_html").html("");	
	}
}

// When documents get loaded
$(document).ready(function(){
gnTkn();
//Searching email in database
$("#personalemail").keypress(function(e){
	if(e.which == 13) {
	$.post("../ajaxfiles/checkUserEmail.php",{
		email:$(this).val()
	},function(data){
		if(data == 0){
//			$("#personalemail").attr('Placeholder','Email Not Found');
				//$(this).parent('.box_container').find('div').remove('.validate');
				/*$(".box_container").find('div').remove('.validate');
				$("#personalemail").parent('.box_container').find('div').remove('.validate');
				div ="<div class='validate'>Email Not Found</div>";
				$("#personalemail").parent('.box_container').append(div);*/
				removeAll();
				alert('Wrong Email Id');
		}else{
				displayAll();
				$("#personalemail").attr('readonly',true);
		}
	});
	}
});
//Fill Details
$("#match").click(function(){
	title=$(this).attr('title');
	if(title=="fetchUserDetails"){
		$.post("../ajaxfiles/checkUserEmail.php",{
			email:$("#fetchUserDetails").val()
		},function(data){
			if(data == 0){alert("Wrong EmailId");}else{
				dt = data.split(' / ');
				$("#updateId").val(dt[0]);
				$("#username").val(dt[1]);
				$("#email").val(dt[2]);
				if(dt[6] == 0)
					$('input[name=Isadmin][value=2]').prop("checked",true);
				else
					$('input[name=Isadmin][value=1]').prop("checked",true);
				if(dt[5] == 0)
					$('input[name=Isactive][value=2]').prop("checked",true);
				else
					$('input[name=Isactive][value=1]').prop("checked",true);
				$('#sq option:contains('+dt[3]+')').prop('selected', true);
				$('#sa').val(dt[4]);
				popup("close");
				$("#insert").val("Update");
				updateId = 1;
			}
		});
	}else if(title == "fetchUserPersonal"){
		email =$("#fetchUserPersonal").val();
		$.post("../ajaxfiles/checkEmailPersonal.php",{
			email:email
		},function(data){
			//alert(data);
			if(data == 0){alert("Wrong EmailId");}else{
				dt = data.split(' / ');
				$("#insertId").val(dt[0]);
				$("#personalemail").val(dt[1]);
				$("#firstname").val(dt[2]);
				$("#lastname").val(dt[3]);
				$("#phone").val(dt[4]);
				$("#address").val(dt[5]);
				$("#state").val(dt[6]);
				$("#city").val(dt[7]);
				$("#country").val(dt[8]);
				$("#dob").val(dt[9]);
				$('#gender option:contains('+dt[10]+')').prop('selected', true);
				popup("close");
				displayAll();
				$("#insert").val("Update");
				updateId = 1;
			}
		});	
	}else if(title == "category"){
			categoryname = $("#category option:selected").text();
			title = $("#category option:selected").attr('title');
			id = $("#category").val();
			$("#updateId").val(id);
			if(title == 0)
				$('input[name=Isactive][value=2]').prop("checked",true);
			else
				$('input[name=Isactive][value=1]').prop("checked",true);
			$("#categoryname").val(categoryname);
			popup("close");
			$("#insert").val("Update");
			updateId = 1;
	}else if(title == "menu"){
		menuname =$("#menu option:selected").text();
		id =$("#menu").val();
		title = $("#menu option:selected").attr('title');
		$("#updateId").val(id);
		if(title == 0)
			$('input[name=Isactive][value=2]').prop('checked',true);
		else
			$('input[name=Isactive][value=1]').prop('checked',true);
		$("#name").val(menuname);
			popup("close");
			$("#insert").val("Update");
			updateId = 1;
	}else if(title == "pages"){
		pagename =$("#pages option:selected").text();
		menuid =$("#pages option:selected").attr('menuid');
		title =$("#pages option:selected").attr('title');		
		active =$("#pages option:selected").attr('active');		
		desc =$("#pages option:selected").attr('desc');
		id =$("#pages").val();
		$("#updateId").val(id);
		$("#title").val(title);
		$("#description").val(desc);
		if(active == 0)
			$('input[name=Isactive][value=2]').prop('checked',true);
		else
			$('input[name=Isactive][value=1]').prop('checked',true);
		$("#p_name").val(pagename);
		$("#menuid").val(menuid);
			popup("close");
			$("#insert").val("Update");
			updateId = 1;
	}else if(title == "products"){
		productname =$("#products option:selected").text();
		sub_cat_id =$("#products option:selected").attr('sub_cat_id');
		description =$("#products option:selected").attr('description');		
		picture =$("#products option:selected").attr('picture');		
		price =$("#products option:selected").attr('price');
		discount =$("#products option:selected").attr('discount');
		rating =$("#products option:selected").attr('rating');
		instock =$("#products option:selected").attr('instock');
		id =$("#products").val();
		$("#updateId").val(id);
		$("#productname").val(productname);
		$("#sub_cat_id").val(sub_cat_id);
		$("#description").val(description);
		$("#picture").val(picture);
		$("#price").val(price);
		$("#discount").val(discount);
		$("#rating").val(rating);
		if(instock == 0)
			$('input[name=instock][value=2]').prop('checked',true);
		else
			$('input[name=instock][value=1]').prop('checked',true);

			popup("close");
			$("#insert").val("Update");
			updateId = 1;
	}else if(title == "subcategory1"){
			categoryId =$("#subcategory1 option:selected").attr('catid');
			subcategory= $("#subcategory1 option:selected").text();
			active =$("#subcategory1 option:selected").attr('active');
			id =$("#subcategory").val();
			$("#updateId").val(id);
			$("#subcategory").val(subcategory);
		if(active == 0)
				$('input[name=Isactive][value=2]').prop("checked",true);
			else
				$('input[name=Isactive][value=1]').prop("checked",true);
			$("#subcategory").val(subcategory);
			$("#categoryId").val(categoryId);
			
			popup("close");
			$("#insert").val("Update");
			updateId = 1;
	}
});
$('input[type=text],input[type=email]').focus(function(){
	$(this).parent('.box_container').find('div').remove('.validate');
	title = $(this).attr('placeholder');
	if(title == "Search"){return false;}
	div ="<div class='validate'>"+ title +"</div>";
	$(this).parent('.box_container').append(div);
});
$('input[type=text],input[type=email]').focusout(function(){
	$(this).parent('.box_container').find('div').remove('.validate');
	if($(this).val() == ""){
		$(this).parent('.box_container').append(div);
		$(this).parent('.box_container').find('.validate').html('');
		$(this).parent('.box_container').find('.validate').html("Required").css("color","#ff0000");
		$(this).css("border-color","#ff0000");
	}else{
		$(this).parent('.box_container').find('div').remove('.validate');
		$(this).css("border-color","#2FA4E7");
	}
});
});

// Insert User Personal and updateId User Personal details
function insertUserPersonal(){
if(flag ==1){
			if(updateId == 0){
			personalemail = $("#personalemail").val();
			phone = $("#phone").val();
			firstname = $("#firstname").val();
			lastname = $("#lastname").val();
			phone = $("#phone").val();
			address = $("#address").val();
			state = $("#state").val();
			city = $("#city").val();
			country = $("#country").val();
			dob = $("#dob").val();
			gender = $("#gender").val();
			p_tk_en= $("#p_tk_en").val();
			$.post("../ajaxfiles/insertpersonal.php",{
			personalemail:personalemail,
			firstname:firstname,
			lastname:lastname,
			phone:phone,
			address:address,
			state:state,
			city:city,
			country:country,
			dob:dob,
			gender:gender,
			p_tk_en:p_tk_en
			
		},function(data){
		if(data == -1){
		alert("Do not try these attacks.Your IP has been sent.");
		window.location='index.php';
		}
		else if(data == 0){
			alert("Information is present in database");
			$("#personalemail").focus().val('');
			return false;
		}else{
			clearAll();
			alert(data);
			removeAll();
			$("#personalemail").focus();
			gnTkn();
		}
	});
		}else if(updateId == 1){
			personalemail = $("#personalemail").val();
		    firstname = $("#firstname").val();
			lastname = $("#lastname").val();
			phone = $("#phone").val();
			address = $("#address").val();
			state = $("#state").val();
			city = $("#city").val();
			country = $("#country").val();
			dob = $("#dob").val();
			gender = $("#gender").val();
			p_tk_en= $("#p_tk_en").val();
			$.post("../ajaxfiles/updatePersonal.php",{
			id:$("#insertId").val(),
			personalemail:personalemail,
			firstname:firstname,
			lastname:lastname,
			phone:phone,
			address:address,
			state:state,
			city:city,
			country:country,
			dob:dob,
			gender:gender,
			p_tk_en:p_tk_en
			
		},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
		else{
			clearAll();
			removeAll();
			alert(data);
			gnTkn();
			}
						
		});
	}
	}
}

//For Clearing all inputs
function clearAll()
{
	$("input[type=password],input[type=text],input[type=date],textarea,input[type=email]").val('');
	$("select").val('0');
	
}
//For removing all inputs
function removeAll(){
	$("input[type=text],input[type=date],textarea,select,input[type=button]").css("display","none");
}
// For displaying all Inputs
function displayAll(){
	$("input[type=text],textarea,input[type=date],select,input[type=button]").css("display","block");
}

//Inserting category!!!
function insertCategory(){
	if(flag==1){
		if(updateId == 0){
			categoryname=$("#categoryname").val();
			Isactive=$("input[name=Isactive]:checked").val();
			p_tk_en=$("#p_tk_en").val();
			$.post("../ajaxfiles/insertcategory.php",{
				categoryname:categoryname,
				Isactive:Isactive,
				p_tk_en:p_tk_en
			},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else if(data == 0){
					alert("category is already present");
					$("#categoryname").focus().val('');
				}else{
					alert(data);
					clearAll();
					gnTkn();
				}
			});
		}else if(updateId == 1){
			categoryname =$("#categoryname").val();
			Isactive=$("input[name=Isactive]:checked").val();
			p_tk_en=$("#p_tk_en").val();
			upId = $("#updateId").val();
			$.post("../ajaxfiles/updateCategory.php",{
			categoryname:categoryname,
			Isactive:Isactive,
			id:upId,
			p_tk_en:p_tk_en

			},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
				alert(data);
				updateId=0;
				clearAll();
				$("#insert").val("Insert Records");
				gnTkn();
				}
			});
		}
	}
}


//Defining The Function insertUserPages
function insertUserPages(){
	if(flag == 1){
		if(updateId == 0){
			$.post("../ajaxfiles/insertpages.php",{
			menuid:$("#menuid").val(),
			title:$("#title").val(),
			p_name:$("#p_name").val(),
			description:$("#description").val(),
			Isactive:$("input[name=Isactive]:checked").val(),
			p_tk_en:$("#p_tk_en").val()
			},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
				$("input[type=text]").val("");
				alert(data);
				gnTkn();
				}
			});
		}
		else if(updateId == 1){
			menuid = $("#menuid").val();
		    title = $("#title").val();
			p_name = $("#p_name").val();
			description = $("#description").val();
			Isactive=$("input[name=Isactive]:checked").val();
			p_tk_en=$("#p_tk_en").val();
			$.post("../ajaxfiles/updatePages.php",{
			id:$("#updateId").val(),
			menuid:menuid,
			title:title,
			p_name:p_name,
			description:description,
			Isactive:Isactive,
			p_tk_en:p_tk_en
		},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
					clearAll();
					alert(data);
					$("#insert").val("Insert");
					updateId =0;
					gnTkn();
				}
						
		});
	}
	}
}



//Defining The Function insertUserMenu
function insertUserMenu(){
	if(flag == 1){
		if(updateId == 0){
			$.post("../ajaxfiles/insertmenu.php",{
			name:$("#name").val(),
			Isactive:$("input[name=Isactive]:checked").val(),
			p_tk_en:$("#p_tk_en").val()
			},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
				$("input[type=text]").val("");
				alert(data);
				gnTkn();
				}
			});
		}
		else if(updateId == 1){
			name = $("#name").val();
		    Isactive=$("input[name=Isactive]:checked").val();
			p_tk_en=$("#p_tk_en").val();
			$.post("../ajaxfiles/updateMenu.php",{
			id:$("#updateId").val(),
			name:name,
			Isactive:Isactive,
			p_tk_en:p_tk_en
			
		},function(data){
		if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
					clearAll();
					alert(data);
					$("#insert").val("Insert");
					updateId =0;
					gnTkn();
					}
						
		});
	}
	}
}
// insert subcategory
function insertsubcategory(){
	if(flag == 1){
		if(updateId == 0){
			categoryId = $("#categoryId").val();
			subcategory = $("#subcategory").val();
			Isactive = $("input[name=Isactive]:checked").val();
			p_tk_en=$("#p_tk_en").val();
			$.post("../ajaxfiles/subcategory.php",{
				categoryId:categoryId,
				subcategory:subcategory,
				Isactive:Isactive,
				p_tk_en:p_tk_en
			},
			function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else if(data==0){
					alert("subcategory already exist");
				}else{
					alert(data);
					clearAll();
					gnTkn();
				}
			});
		}else if(updateId == 1){
			categoryId =$("#categoryId").val();
			subcategory =$("#subcategory").val();
			alert(subcategory);
			Isactive=$("input[name=Isactive]:checked").val();
			upId = $("#updateId").val();
			$.post("../ajaxfiles/updatesubcat.php",{
			categoryId:categoryId,
			subcategory:subcategory,
			Isactive:Isactive,
			id:upId
			},function(data){
				alert(data);
				updateId=0;
				clearAll();
				$("#update").val("Insert");
			});
		}
	}
}


//Defining The Function insertproducts
function insertproducts(){
	if(flag == 1){
		if(updateId == 0){
			$.post("../ajaxfiles/insertproducts.php",{
			sub_cat_id:$("#sub_cat_id").val(),
			productname:$("#productname").val(),
			description:$("#description").val(),
			picture:$("#imgName").val(),
			price:$("#price").val(),
			discount:$("#discount").val(),
			rating:$("#rating").val(),
			instock:$("input[name=instock]:checked").val(),
			p_tk_en:$("#p_tk_en").val()
			},function(data){
			if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
				clearAll();
				$("input[type=text]").val("");
				alert(data);
				gnTkn();
				}
			});
		}
		else if(updateId == 1){
		$.post("../ajaxfiles/updateproducts.php",{
			id:$("#updateId").val(),
			sub_cat_id:$("#sub_cat_id").val(),
			productname:$("#productname").val(),
			description:$("#description").val(),
			picture:$("#imgName").val(),
			price:$("#price").val(),
			discount:$("#discount").val(),
			rating:$("#rating").val(),
			instock:$("input[name=instock]:checked").val(),
			p_tk_en:$("#p_tk_en").val()
			
		},function(data){
		if(data == -1){
			alert("Do not try these attacks.Your IP has been sent.");
			window.location='index.php';
			}
			else{
					clearAll();
					alert(data);
					$("#insert").val("Insert");
					updateId =0;
					gnTkn();
				}
						
		});
	}
	}
}
function check() {
    var name = document.getElementById("name").value;
    var mad = document.getElementById("mad");
    var gmail = document.getElementById("gmail").value;
    var mad1 = document.getElementById("mad1");
    var age = document.getElementById("age").value;
    var mad2 = document.getElementById("mad2");
    var password = document.getElementById("password").value;
    var mad3 = document.getElementById("mad3");
    var alb = /^[a-zA-Z ]+$/;
    
    var count = 0;
    
    if (!alb.test(name)) {
        mad.classList.add("incorrect");
        mad.innerHTML = "Name should not contain special characters";
    } else {
        mad.innerHTML = "";
        count++;
    }
    
    if (!(gmail.includes("@"))) {
        mad1.classList.add("incorrect");
        mad1.innerHTML = "Email should contain '@'";
    } else {
        mad1.innerHTML = "";
        count++;
    }
    
    if (age < 18) {
        mad2.classList.add("incorrect");
        mad2.innerHTML = "Age should be greater than or equal to 18";
    } else {
        mad2.innerHTML = "";
        count++;
    }
    
    if (password.length < 10) {
        mad3.classList.add("incorrect");
        mad3.innerHTML = "Password should be at least 10 characters long";
    } else {
        mad3.innerHTML = "";
        count++;
    }
    
    console.log(count);
    
    if (count === 4) {
        return true;
    } else {
        return false;
    }
}

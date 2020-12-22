//Slide toggle for HINT BLOCKS
$(document).ready(function(){

    $('.toggler').click(function(){
        $(this).next('.hint-content').slideToggle();

        var text = $(this).text() == 'expand_more' ? 'expand_less' : 'expand_more';
        $(this).text(text);
    });

});





// LAB 1

var status = document.getElementById('status-1').innerHTML;

if(status == 0){
	document.getElementById('status-1').innerHTML = "Incomplete";
	document.getElementById('icon-1').innerHTML = "priority_high";
	document.getElementById('check-1').classList.add('incomplete');
}
else if(status == 1){
	document.getElementById('status-1').innerHTML = "Complete";
	document.getElementById('icon-1').innerHTML = "done_all";
	document.getElementById('check-1').classList.add('complete');
}

// ALL

var status = document.getElementById('status-all').innerHTML;

if(status == 1){
	document.getElementById('status-all').innerHTML = "Complete";
	document.getElementById('icon-all').innerHTML = "done_all";
	document.getElementById('check-all').classList.add('complete');
}
else if(status == 0){
	document.getElementById('status-all').innerHTML = "Incomplete";
	document.getElementById('icon-all').innerHTML = "priority_high";
	document.getElementById('check-all').classList.add('incomplete');
}


// LAB 2

var status = document.getElementById('status-2').innerHTML;

if(status == 0){
	document.getElementById('status-2').innerHTML = "Incomplete";
	document.getElementById('icon-2').innerHTML = "priority_high";
	document.getElementById('check-2').classList.add('incomplete');
}
else if(status == 1){
	document.getElementById('status-2').innerHTML = "Complete";
	document.getElementById('icon-2').innerHTML = "done_all";
	document.getElementById('check-2').classList.add('complete');
}


// LAB 3

var status = document.getElementById('status-3').innerHTML;

if(status == 0){
	document.getElementById('status-3').innerHTML = "Incomplete";
	document.getElementById('icon-3').innerHTML = "priority_high";
	document.getElementById('check-3').classList.add('incomplete');
}
else if(status == 1){
	document.getElementById('status-3').innerHTML = "Complete";
	document.getElementById('icon-3').innerHTML = "done_all";
	document.getElementById('check-3').classList.add('complete');
}


// LAB 4

var status = document.getElementById('status-4').innerHTML;

if(status == 0){
	document.getElementById('status-4').innerHTML = "Incomplete";
	document.getElementById('icon-4').innerHTML = "priority_high";
	document.getElementById('check-4').classList.add('incomplete');
}
else if(status == 1){
	document.getElementById('status-4').innerHTML = "Complete";
	document.getElementById('icon-4').innerHTML = "done_all";
	document.getElementById('check-4').classList.add('complete');
}


// LAB 5

var status = document.getElementById('status-5').innerHTML;

if(status == 0){
	document.getElementById('status-5').innerHTML = "Incomplete";
	document.getElementById('icon-5').innerHTML = "priority_high";
	document.getElementById('check-5').classList.add('incomplete');
}
else if(status == 1){
	document.getElementById('status-5').innerHTML = "Complete";
	document.getElementById('icon-5').innerHTML = "done_all";
	document.getElementById('check-5').classList.add('complete');
}


// LAB 6

var status = document.getElementById('status-6').innerHTML;

if(status == 0){
	document.getElementById('status-6').innerHTML = "Incomplete";
	document.getElementById('icon-6').innerHTML = "priority_high";
	document.getElementById('check-6').classList.add('incomplete');
}
else if(status == 6){
	document.getElementById('status-6').innerHTML = "Complete";
	document.getElementById('icon-6').innerHTML = "done_all";
	document.getElementById('check-6').classList.add('complete');
}
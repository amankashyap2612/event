<?php

include 'admin/config/conn.php';

$book =$_GET['book'];
$booksql ="select * from event where eventid ='".$book."' ";
$bookquery =mysqli_query($conn,$booksql);
$bookarray =mysqli_fetch_array($bookquery);
//print_r($bookarray);
						
					
?>


<!doctype html>
<html lang="en">
<?php include 'include/head.php';?>

<style>
/* (A) SEAT & "COLOR CODE" */
.seat {
  text-align: center;
  padding: 20px 10px;
  border-radius: 10px;
  background: #f1f1f1;
}
.taken { background: #df0000; color: #fff; }
.selected { background: #87ff96; }
 
/* (B) SEATS LAYOUT */
#layout {
  max-width: 400px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
  margin-bottom: 20px;
}
 
/* (C) LEGEND */
#legend {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: 50px auto ;
}
#legend .txt {
  display: flex;
  align-items: center;
}
 
/* (D) SAVE */
#save {
  font-size: 20px;
  margin-top: 20px;
  padding: 10px 20px;
  border: 0;
  color: #fff;
  background: #00479f;
}
</style>

<body>
<?php include 'include/nav.php';?>
<?php include 'include/nav2.php';?>


<section class="hht " >
		<div class="row">
			<div class="col-4">
				<div>
					<img src="admin/img/frontimage/<?php echo $bookarray['shortimage'];?> " style="width:100%; "/>
				</div>
			</div>
			<div class="col-8">
				<div>
					<?php echo $bookarray['seat'];?>
					<?php echo $bookarray['openingdate'];?>
					<?php echo $bookarray['closingdate'];?>
					<select id="cat" class="form-control">
						<option value=""><--Date/Seat --></option>
							<option value="2"> Seat <?php echo $bookarray['seat'];?></option>
							<option value="2"> Open <?php echo $bookarray['openingdate'];?></option>
							<option value="2"> Close <?php echo $bookarray['closingdate'];?></option>
							<option value="2"> Price <?php echo $bookarray['price'];?></option>
					</select>
					
					
				</div>
			</div>
		</div>
</section>

<div id="layout"></div>
 
<!-- (B) LEGEND -->
<div id="legend">
  <div class="seat"></div> <div class="txt">Available</div>
  <div class="seat taken"></div> <div class="txt">Taken</div>
  <div class="seat selected"></div> <div class="txt">Your Chosen Seats</div>
</div>
 
<!-- (C) SAVE SELECTION -->
<button id="save" onclick="reserve.save()">Reserve Seats</button>



<?php include 'include/foot.php';?>

<script>

var reserve = {
  // (A) INIT
  init : () => {
    // (A1) GET LAYOUT WRAPPER
    let layout = document.getElementById("layout");
 
    // (A2) GENERATE SEATS
    for (let i=65; i<=68; i++) { for (let j=1; j<=4; j++) {
      let seat = document.createElement("div");
      seat.innerHTML = String.fromCharCode(i) + j;
      seat.className = "seat";
      seat.onclick = () => { reserve.toggle(seat); };
      layout.appendChild(seat);
    }}
 
    // (A3) FOR DEMO ONLY - RANDOM TAKEN SEATS
    // let all = document.querySelectorAll("#layout .seat"),
        // len = all.length - 1, rnd = [];
    // while (rnd.length != 3) {
      // let r = Math.floor(Math.random() * len);
      // if (!rnd.includes(r)) { rnd.push(r); }
    // }
    // for (let i of rnd) {
      // all[i].classList.add("taken");
      // all[i].onclick = "";
    // }
  },
 
  // (B) CHOOSE THIS SEAT
  toggle : (seat) => {
    seat.classList.toggle("selected");
  },
 
  // (C) SAVE RESERVATION
  save : () => {
    // (C1) GET SELECTED SEATS
    let selected = document.querySelectorAll("#layout .selected");
 
    // (C2) ERROR!
    if (selected.length == 0) { alert("No seats selected."); }
 
    // (C3) SELECTED SEATS
     
  }
};
 
window.addEventListener("DOMContentLoaded", reserve.init);
</script>
<script>

const animals = ['pigs', 'goats', 'sheep'];

const count = animals.push('cows');
console.log(count);
// expected output: 4
console.log(animals);
// expected output: Array ["pigs", "goats", "sheep", "cows"]

animals.push('chickens', 'cats', 'dogs');
console.log(animals);
// expected output: Array ["pigs", "goats", "sheep", "cows", "chickens", "cats", "dogs"]





let num = [-1,-2,-3,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
let result = [];
function isPrime(num) {
  if(num < 2) return false;

  for (let k = 2; k < num; k++){
    if(num % k == 0){
      return false;
    }
  }
  return true;
}
num.forEach(function (element) {
  const item = isPrime(element);
  if (item) {
    result.push(element);
  }
});
console.log(result); // [ 2, 3, 5, 7, 11, 13, 17, 19]


// array reverse ya serial wise krne ka work

const fruits = ["Banana", "Orange", "Apple", "Mango"];
console.log(fruits);

// First sort the array
fruits.sort();
console.log(fruits);
// Then reverse it:
fruits.reverse();
console.log(fruits);

//array reverse ya serial wise krne ka work


//array  count me reverse ya serial wise krne ka work

const points = [40, 100, 1, 5, 25, 10];
console.log(points);
points.sort(function(a, b){return a - b});
console.log(points);

console.clear();

//array  count me reverse ya serial wise krne ka work

const d = new Date(2018, 11, 24, 10, 33, 30, 0);
console.log(d);


console.clear();
// date work in js

//array pop 
const fm= ["Banana", "Orange", "Apple", "Mango"];
console.log(fm);
fm.pop();
console.log(fm);
console.clear();
//array pop 
</script>

</body>
</html>
<button class="message btn btn-danger" onclick="openform()">Finance Chat Box</button>
  

    <div class="chat-popup" id="myForm">
	   <div class="card" style="width: 18rem; height: 400px;">
		  <div class="card-header badge-danger">
		    Finance Chat Box
		    <button class="close btn-sm border-0 text-white float-right" aria-hidden="true" onclick="closeform()">&times;</button>
		  </div>
		  
</div>
    </div>

<script>
function openform() {
  document.getElementById("myForm").style.display = "block";
}

function closeform() {
  document.getElementById("myForm").style.display = "none";
}

</script>
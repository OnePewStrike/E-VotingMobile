<div class="voting">
 <div class="election-details">
  <div class="title">[Election Name]</div>
 </div>
 <form class="modify" action="" method="">
  <div class="position">
   <span class="select">Select 1</span>
   <span class="title">/President</span>
  </div>
  <div class="candidates-group">
   <?php for($i=0; $i<=5;$i++) { ?>
    <div class="candidate">
     <div class="group">
      <img src="assets/images/dummy_avatar.png" alt="">
      <div class="candidate-details">
       <div class="name">John Doe</div>
       <div class="party-name">Party People</div>
      </div>
     </div>
     <div class="field checkbox">
      <input type="checkbox">
     </div>
    </div>
   <?php } ?>
  </div>
  <div class="abstain">
   <p class="description">I would like to abstain voting for this position.</p>
   <div class="field checkbox">
    <input type="checkbox">
   </div>
  </div>
 </form>
 <div class="actions">
  <button class="tertiary wide">Go Back</button>
  <button class="primary wide">Submit</button>
 </div>
</div>
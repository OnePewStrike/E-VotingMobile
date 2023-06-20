<div class="results">
  <div class="top">
    <span class="title-page">Voting Results</span>
    <div class="card-group">
      <div class="card">
        <div class="group">
          <span class="value">5000</span>
          <i class="fa-solid fa-check-to-slot"></i>
        </div>
        <span class="name">Total Values</span>
      </div>
      <div class="card">
        <div class="group">
          <span class="value">Final</span>
          <i class="fa-solid fa-bookmark"></i>
        </div>
        <span class="name">Voting Status</span>
      </div>
    </div>
    <div class="position">
      <span class="title">Position</span>
      <span class="name">/President</span>
    </div>
  </div>
  <div class="bottom">
    <div class="content-col">
      <div class="title">Candidates</div>
      <div class="grouped-items">
      <?php for($i=0; $i<=4; $i++) { ?> 
        <div class="item <?php echo ($i == 2) ? 'selected' : ''; ?>">
          <img src="assets/images/dummy_avatar.png" alt="">
          <div class="candidate-info">
            <div class="name">John Doe</div>
            <div class="party-name">Party People</div>
          </div>
          <div class="group">
            <div class="vote-count">1000 Votes</div>
            <div class="percentage">20%</div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    <ul class="nav-results">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
    </ul>
  </div>
</div>
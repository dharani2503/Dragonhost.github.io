            <div >
            <!-- Right side element with popular items-->
                <h1>Popular</h1>
                    <div class="list-group">
                    <?php foreach($blogitems as $b){ ?>
                      <a href="view.php?id=<?php echo $b['id']; ?>" class="list-group-item list-group-item-action"><?php echo $b['title']; ?></a>
                      
                    <?php } ?>
                </div>
            <!-- End of popular items -->
              </div>
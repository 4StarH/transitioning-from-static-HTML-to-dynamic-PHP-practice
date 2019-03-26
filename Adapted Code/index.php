<!DOCTYPE html>

<!––Forrester Hinds' CST8285 Lab 9-->

            <?php include 'header.php'; ?>
			
			<div id="content" class="clearfix">
			
			<?php include 'menuItem.php'; 
			
			$menuItem1 = new menuItem( "The WP Burger", "Freshly made all-beef patty served up with homefries.", "$14");
			$menuItem2 = new menuItem( "WP Kebobs", "Tender cuts of beef and chicken, served with your choice of side.", "$17");
			
			$itemName1 = $menuItem1->getItemName();
			$description1 = $menuItem1->getDescription();
			$price1 = $menuItem1->getPrice();
			
			$itemName2 = $menuItem2->getItemName();
			$description2 = $menuItem2->getDescription();
			$price2 = $menuItem2->getPrice();
			
			?>
			
			<aside>
                <h2><?php echo date("l"); ?> Specials</h2>
                <hr>
                <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
                <h3> <?php echo $itemName1; ?></h3>
                <p><?php echo "$description1 - $price1"; ?></p>
                <hr>
                <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                <h3><?php echo $itemName2; ?></h3>
                <p><?php echo "$description2 - $price2"; ?></p>
                <hr>
            </aside>	
				
				
				
                <div class="main">
                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->
				
				
			</div><!-- End Content -->
				
			<?php include 'footer.php'; ?>


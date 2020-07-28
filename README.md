# WallyWidget

<strong>General instructions:</strong>
 
Step 1: Create a new account.

Step 2: Click on the link for the product page. There will be a table. This shows the widget size packages that are available.

Step 3: Type in the amount of widgets you would like to order and click submit.

Optional 

Step 4: In the navigation bar, there is an admin page. Click on this.

Step 5: You can now either add, delete or edit the fields.

<strong>Adding a new pack size:</strong>

Step 1: When you have clicked on the Dashboard, select the 'Add a new pack size' button.

Step 2: Type in the number of widget you want in one packet in the first fieldbox and the price you want in the second fieldbox.

Step 3: Click submit.

<strong>Editing a pack size:</strong>

Step 1: When you have clicked on the Dashboard, select the 'Edit' button for one of the exisiting pack sizes in the table.

Step 2: If you have edited a pack size, you will need to go to the .env and edit the property related to this. To check which property affects view page, go to the directory 'resources.views.site.products.index'. There, you will find comments related to the number of widgets for each pack.

Step 3: Change the appropriate comment and env property related to what you just edited.

<strong>Deleting a pack size:</strong>

Step 1: When you have clicked on the Dashboard, select the 'Delete' button for one of the exisiting pack sizes in the table.

Step 2: Go to the .env file and remove the min and max widget size for that figure.

# Fe_User_Cards

## What does it do?
Fe_User_Cards is a Typo3 extension which displays Fe_Users in the Frontend. 

You can select wheter you want display the members of fe_group or display a single fe_user.

## How to install?
Just download it from the TER and install it to your Typo3 installation.
There is no further configuration needed for basic functionality.

## How to use?
First you have to include the FE_User Cards template in your sitetemplate.
Go to any site you want and add a general plugin. There you will find two plugins 
* Single Fe_User Card: With this plugin you can display a single fe_user.
* Multiple Fe_User Cards: With this plugin you can display a all fe_user from given groups.

### Single Fe_User Card
First select the storage folder where your fe_user is stored. After that you have to click 'Save' to load the fe_user from the storage folder. Then you will see all fe_user which are stored in the storage folder. Just select the one you want to display.

### Multiple Fe_User Cards
First select the storage folder where your fe_users and fe_groups are stored. After that you have to click 'Save' to load the fe_groups from the storage folder. Then you will see all fe_groups which are stored in the storage folder. Just select all groups you want to display.

## How to configure?
### Sorting of multiple fe_user cards
Edit your fe_user then go to options-tab. There you will find afield 'sorting'. Just instert an integer with the sorting position you want this user to be. The user will be sorted ascending by this value.

## FAQ
### Why is this beta?
The Typo3 guidelines say that stable plugins have to be well supported and I will add fixes or new features if I need them. But feel free to contribute to this plugin.

### Is it stable
I hope so ;)


# Classic Apple Sauce Version 1.0
<p>
	Easy Mac OS 9.2 Emulation For Windows

![image](https://github.com/hitsfm/classic-apple-sauce/blob/main/Screenshots/UI.png)
		
![image](https://github.com/hitsfm/classic-apple-sauce/blob/main/Screenshots/Macload.png)

Welcome to Classic Apple Sauce, a powerful PHP-based front end that controls a specialized development version of QEMU, making it incredibly easy to boot and run Mac OS 9.2 with essential profile save and import features.

Are you tired of struggling with the complex command structures of QEMU or dealing with batch files in a command-line environment? Look no further. Classic Apple Sauce is designed to address these challenges and provide a streamlined experience for running Mac OS 9.2 in QEMU.

Many users have expressed frustration with the lack of clear instructions and limited customization options found in existing solutions, such as the incomplete Mac OS 9.2 images available on Archive.org. That's where Classic Apple Sauce comes in, offering a comprehensive front end that simplifies the entire process.

One of the significant advantages of using QEMU is that Classic Apple Sauce does not require a Mac system ROM to operate. It emulates an Apple G3 CPU using binary translation, providing an experience closest to running on native hardware. Unlike other emulators, such as Sheepshaver, which rely on software hacks and CPU speedups, Classic Apple Sauce focuses on accuracy and stability, delivering a stable environment without general glitches or random freezes.
<p>
Key Features:

Windows UI Front End: The full-fledged Windows user interface allows for easy navigation and configuration.
Boot Disk/ISO Directory: Optionally specify the boot disk or ISO directory for enhanced flexibility.
Profile Management: Save and load profiles for different emulated machines effortlessly.
New Hard Disk Creation: Create new blank hard disk files with just a few clicks.
	<p>
System Requirements:
<p>
Windows 10 64-bit or higher
Intel Core i7 CPU or better
	<p>
Emulated Machine Specifications:
<p>
Machine: G3
RAM: 512 MB (adjustable through the front end)
Hard Drive 1 and 2: 2 GB each
Networking: Host-NAT DHCP Server (AppleTalk compatible; advanced users can set up virtual TAP on Windows host for online functionality)
Sound Support
CD ISO: Optional (configurable via the front end)
	<p>
	
Compilation:
To modify the PHP code, you can leverage frameworks like Electron to build the application according to your specific needs.
		
			
Working direcoty is (data/www). New HD images created using the front end will be created in this directory. Simply load your hard drive images and ISO files in this directory as well for easy method of only needing to provide the file name without the full path since this is our "Application" working directory.  

Discover the convenience and reliability of Classic Apple Sauce for running Mac OS 9.2 smoothly in a QEMU environment. Embrace the stability, compatibility, and familiarity of this emulator, bringing you closer to the authentic Mac experience. Start your journey with Classic Apple Sauce today!
	
	To get started and boot Mac OS 9.2. Download the precompiled release and run on your Windows 10 64 bit system.
	
	
Todo / Bugs
	
Browse Function: Places a fake path once file is selected in the form. User needs to correct to real path after selection. This is a hard coded security issue limitation. The Browse function is still good to have as it allows a quick access to browse for our files without needing to close or minimize the front end to help us remember the full path of our many files.  
		
Splash Screen App:
First version for Windows. Just unzip and run. Don't modify contents of data directory or the emulator will break. Windows may detect as a false malware as this uses CMD to pass your QEMU settings. Sorry. If you don't trust it simply take a look at the Data/www/ directory and find QEMU.BAT and take a look at the content yourself for peace of mind before running the application. Then allow the app to run on your system. The choice is yours, Optionally if you prefer bypassing the easy launcher app. Just manually navigate to the directory data and start the program phpdesktop-chrome.exe This will load the emulator front end. I used simple Bat2EXE program to make a nice launcer. It's optinal to run the emulator as you can simply browse to the data directory and run the execuatble from there. I may convert this to a better app using visual basic instead if Windows keeps complaining about malware.
		
TODO: Check back often as I will include updated files or links to virtual Mac OS machines that are preconfigured and ready to go with Classic Apple Sauce V 1.0. That you can import from the front end UI with drive images such as applications and games. This will save you the many many hours of having to install, reboot, reload just to operate your favorite classic application or game. 

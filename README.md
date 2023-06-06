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
		<p>

Discover the convenience and reliability of Classic Apple Sauce for running Mac OS 9.2 smoothly in a QEMU environment. Embrace the stability, compatibility, and familiarity of this emulator, bringing you closer to the authentic Mac experience. Start your journey with Classic Apple Sauce today!
	
	To get started and boot Mac OS 9.2. Download the precompiled release and run on your Windows 10 64 bit system.
	
	
	Todo / Bugs
	
	-Browse Function displays a fake path. User needs to correct path after selection. This is a hard coded security issue limitation. 

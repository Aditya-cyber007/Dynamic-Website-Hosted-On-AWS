# Dynamic-Website-Hosted-On-AWS
This is my first dynamic website which i have hosted on AWS server.

link : http://statusinfotainament.epizy.com/

Steps For Hosting on AWS

1. Login to my AWS Account.

2. Launch an EC2 Instance:

3. Go to EC2-Dashboard then instances. Click on Newly created instance upper right corner and
Connect. 

4. Update the Linux by giving the command: sudo yum update –y

5. Install PHP on your Linux console.

6. Install Apache on the EC2-Instance, now start web server and enable the service.

7. Open the Apache Home page by entering the Public IPv4 DNS of your instance. Make sure it is
using http protocol and not https protocol.

8. Add the www group to EC2 instance with the following command. Add the ec2-user user to
the www group.

9. Change the group ownership of the /var/www directory and its contents to the www group.
Change the directory permissions of /var/www and its subdirectories to add group write permissions
and set the group ID on subdirectories created in the future. Recursively change the permissions for
files in the /var/www directory and its subdirectories to add group write permissions.

10. Change the directory to /var/www/html.

11. Create a new files using vi and pasted code with name mentioned above.

12. Given permission to read, write as well as execute to the files mentioned below:
	Details.txt
	App_num.txt
By command – chmod 777 filename with extension

13. Given permission to file which will save the record of java or python code in root folder dynamically by code : sudo chown -R ec2-user:apache /var/www

14.  Now open Public IPv4 DNS of EC2 Instance and website is hosted.

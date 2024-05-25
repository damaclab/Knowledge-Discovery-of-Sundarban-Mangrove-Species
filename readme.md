
## About Sellzmart Services

This project is developed using Laravel 7.x. Laravel is accessible, powerful, and provides tools required for large, robust applications. The services website is hosted on AWS EC2. The DNS is managed by Cloudflare and is associated with info@femiza.com. We are using the **free** CDN service provided by Cloudflare.

## Deployment Steps

- Clone this project into the root dir of the ec2 server on which this service is running or where you want to deploy
- Move the contents of this folder(including hidden files - run **ls -al** to check) to /var/www/html folder. This directory should be present if apache is installed on the system.
- Make the following modifications in .env file.
- Change the **APP_URL** to [https://services.sellzmart.com]
- Change the **ASSET_URL** to [https://services.sellzmart.com/public/assets]
- Add/Change the **DB_PASSWORD**
- Add/Change the **EMAIL_USERNAME** and **MAIL_FROM_ADDRESS**
- Add/Change the **EMAIL_PASSWORD**. The password will be enclosed within single quotes('').
- **MAIL_ENCRYPTION** should be set to **ssl**
- **MAIL_HOST** and **MAIL_PORT** values are already set. DONT CHANGE THESE SETTINGS.
- **DB_DATABASE** is set to **db_sellzmartservices**. You can change this, but make sure the Database exists before proceeding to the next step.
- Run all the database migrations. Command: **php artisan migrate:fresh**
- The Contact, Quotation/Pricing, Newsletter forms are submitted using Ajax/Asynchronous requests. If there is any problem with the form submission check the form post urls. There might be some issues because of flexible SSL (Cloudflare).

**NOTE**: Some changes, especially the static CDN managed resources like JS, CSS or Image changes will take a long time to take effect. This is due to the general caching property of CDN's. This waiting time or propagation delay is dependent on the TTL value. Read CDN for more information. 
But we can make this process much faster (or immediate). Log in to the Cloudflare console and under **Caching**->**Configuration**, press **Purge Everything** under **Purge Cache** option. You can also check out the **Developer Mode**.

All these steps may not be required for subsequent deployments. But these steps should be followed for fresh installation or deployment.

## Access To Restricted Resources

For security reasons, lots of sensitive and confidential informations are left out and NOT uploaded on the bitbucket repository. You can request the following from anyone in the team.

- **DB Username**
- **DB Password**
- **Security Keys**(pem, ppk)
- **Email ID**
- **CDN Username**
- **CDN Password**
- **Access/API Keys**
- **Email Username**
- **Email Password**


## Contributing

To start contributing to this project, seek write permission and approvals for this project from anyone in the team. To start contributing, clone/pull the repository in your local development env. Make necessary and required changes and push/merge the code with proper commit messages. The current project structure should work fine in local development env.


## Security Vulnerabilities

If you discover a security vulnerability within the Project, please send an e-mail shabnam.banu@gmail.com. All security vulnerabilities will be promptly addressed.

### Author: Sourav Mondal

### Date Last Modified: 9th August, 2020

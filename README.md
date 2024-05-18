# MyArtisan

MyArtisan is a web application that serves as a platform for connecting skilled artisans with clients seeking real-life services. Developed with Laravel by a team of computer science students, this project aims to address the challenges faced by artisans in Morocco who struggle to find work outside of their own networks.

## Overview

In Morocco, artisans often work independently, relying on word-of-mouth referrals or local advertisements to attract clients. MyArtisan aims to modernize this process by providing a centralized platform where artisans can showcase their skills and services, while clients can easily discover and hire them for various tasks.

## Features

- **Artisan Profiles:** Artisans can create detailed profiles showcasing their skills, experience, and portfolio of previous work.
- **Client Dashboard:** Clients can search for artisans based on location, specialty, and other criteria, view artisan profiles, and hire them for specific tasks.
- **Real-Time Communication:** Built-in chat functionality allows seamless communication between artisans and clients to discuss project details and requirements.
- **Admin Dashboard:** Administrators have access to an admin dashboard for managing user accounts, monitoring activity, and generating insights through analytics.

## DataBase
This is an initial version that you must elaborate based on you needs:

![Capture d’écran 2024-05-12 204055](https://github.com/YoussefLahbari/MyArtisan/assets/118392925/22a66777-4049-4621-90de-f35b60f79e31)


## Getting Started

To contribute to MyArtisan, follow these steps:

1. **Request Contribution Access**:
   - Since MyArtisan is a private repository, send your GitHub username to the project manager (`Youssef Lahbari`) to be added as a contributor. Once your request is approved, you'll receive access to contribute to the repository. Make sure you have your GitHub credentials (username and password or personal access token) ready for authentication.

2. **Clone the Repository**:
   - Clone the main repository to your local machine using the `git clone` command:
     ```bash
     git clone https://github.com/YoussefLahbari/MyArtisan.git
     ```
     
2-1 **Install Dependencies**: 
   - Since Vendor folder isn't uploaded, you will need to run a command to re-install the composer dependencies:  <br>
    ```
    composer install
    ``` 
    <br>
    
3. **Add Remote Origin**:
   - Once you've been granted access to the repository, set the remote origin URL to your forked repository:
     ```bash
     git remote add origin https://github.com/YoussefLahbari/MyArtisan.git
     ```

4. **Create a Feature Branch**:
   - Create a new feature branch based on the main branch using the naming convention described above:
     ```bash
     git checkout -b lastname.key-description-word
     ```

5. **Set Up Environment Variables**:
   - Rename the `.env.example` file to `.env` and configure the database connection settings in the `.env` file according to your local environment.

6. **Work on Your Feature**:
   - Implement your feature or task in the feature branch, making regular commits as you progress:
     ```bash
     git add .
     git commit -m "Your descriptive commit message"
     git push origin lastname.key-description-word
     ```

7. **Submit a Pull Request**:
   - Once your feature is ready, submit a pull request from your feature branch to the main branch of the original repository:
     - Navigate to the main repository on GitHub and click on the "New pull request" button.
     - Select the main branch of the original repository as the base branch and your feature branch as the compare branch.
     - Provide a clear title and description for your pull request, explaining the changes you've made.
     - Click on the "Create pull request" button to submit your pull request.

8. **Review and Merge**:
   - Participate in the code review process by reviewing pull requests from other team members and addressing feedback on your own pull requests.
   - After approval, your pull request will be merged into the main branch, and your changes will become part of the project.

If you have any questions or need assistance during the contribution process, don't hesitate to reach out to the project manager or other team members for support.

## Usage

Once the development server is running, you can access the application at `http://localhost:8000`. From there, you can register as either an artisan or a client, create profiles, search for artisans or clients, initiate chats, and perform other actions according to your role.

## Contribution

We welcome contributions from the community to enhance MyArtisan. If you encounter any bugs, have feature requests, or would like to contribute code, please feel free to open an issue or submit a pull request. Please review our contribution guidelines before making any contributions.

## License

All Rights Reserved.

Copyright (c) 2024 MyArtisan

This project and its source code are proprietary and confidential. No part of this code may be reproduced, distributed, or used in any form or by any means without the prior written permission of the copyright holder.

## Contact

For any inquiries or further information about MyArtisan, please contact the project maintainers:

- Youssef Lahbari: 2003050800361@ofppt-edu.ma
- Youssef Ghafir: 2004062800157@ofppt-edu.ma
- Youssef Keblaoui: kablaoui.youssef@ofppt-edu.ma
- Abderahman Zarria: 2004022900160@ofppt-edu.ma
- Mohammed Mokhtari: 2003032600307@ofppt-edu.ma



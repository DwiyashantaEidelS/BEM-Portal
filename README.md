# BEM-Portal

BEM-Portal is a web-based application designed to streamline the management of work programs within the Student Executive Board (BEM). The platform allows users to manage dwork programs, as well as track activities related to their roles.

**Key Features:**

1. **User Login and Authentication**  
   Users log in with their credentials, and access is granted based on their role within BEM.

2. **Document and Work Program Management (CRUD)**  
   Department heads can create, read, update, and delete work programs, while ministers and staff can only view them.

3. **Role-based Access Control**  
   - **Department Heads** have full access to manage work programs and documents.  
   - **Ministers** and **Staff** can only view the content.

4. **Security and Privacy**  
   The system ensures that only authorized users can make changes, maintaining data integrity and transparency.

**Purpose:**  
The BEM Portal improves efficiency, coordination, and transparency in managing work programs and documents, ensuring that all members have access to the necessary information for their duties.


---

**Local Installation:**

1. **Clone Repository**:  
    `git clone https://github.com/DwiyashantaEidelS/BEM-Portal.git`
    
2. **Install Database**:
    * Export the database file **pengurusbem.sql** and import it to your local or remote database server.
    * Ensure the PHP database connection file points to the correct server.

3. **Run the Application**:
    * Make sure you are using **XAMPP** or any other local server that supports PHP and MySQL.
    * Enter the application URL in your browser to access the login page and other features.


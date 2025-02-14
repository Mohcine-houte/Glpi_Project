# GLPI - IT Asset Management in Docker

This repository contains a **Docker-based deployment of GLPI** (Gestionnaire Libre de Parc Informatique), an open-source IT asset management and helpdesk system.

## **Overview**
GLPI is deployed in a **Docker container**, making it easy to install, configure, and maintain. This setup includes:
- **GLPI Application** (running in a PHP/Apache container)
- **MySQL Database** (to store GLPI data)
- **phpMyAdmin** (for database management)
- **Persistent Storage** for files, logs, and configurations

## **Features**
✅ Easy deployment with Docker  
✅ Automatic database setup  
✅ Persistent storage for data and configurations  
✅ Compatible with Docker Compose  

## **Installation**

### **1. Clone the Repository**
```bash
git clone https://github.com/Mohcine-houte/Glpi_Project.git
cd Glpi_Project
```

### **2. Start GLPI with Docker Compose**
```bash
docker-compose up -d
```
This will start the GLPI service along with the database.

### **3. Access GLPI**
Once the containers are running, open your browser and go to:
```bash
http://localhost:8080
```

### **4. Default Credentials**
- **Username:** \`admin\`
- **Password:** \`azerty\`

(You should change these credentials immediately after logging in.)

## **Configuration & Persistence**
- The \`docker-compose.yml\` file ensures that GLPI data is stored persistently.
- Database credentials and settings can be modified in the \`.env\` file.

## **Stopping the Containers**
To stop and remove the running containers:
```bash
docker-compose down
```

## **Updating GLPI**
1. Pull the latest version:
   ```bash
   git pull origin main
   ```
2. Restart the containers:
   ```bash
   docker-compose up -d --build
   ```

## **Contributing**
Feel free to submit issues or pull requests to improve this setup.
" > README.md


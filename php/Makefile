# parameters
.DEFAULT_GOAL := info

info:
	@echo "Make local dev :"
	@echo "			- up    (launch development server)"
	@echo "			- down  (shutdown server)"
	@echo "			- build (build Docker image)"
	@echo "			- push  (push Docker image)"
	@echo
# Launch Dev environment
up:
	sudo docker-compose up -d
	@echo ""
	@echo "The app is available at http://localhost:8080"
down:  
	sudo docker-compose down

build:  
	sudo docker-compose build
push:  
	sudo docker-compose push


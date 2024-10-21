FROM reg.ntl.nc/proxy/library/python:3.12-slim

WORKDIR /python-docker

COPY requirements.txt requirements.txt
RUN pip3 install -r requirements.txt

COPY app.py .

CMD [ "python3", "-m" , "flask", "run", "--host=0.0.0.0"]

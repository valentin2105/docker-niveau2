# syntax=docker/dockerfile:1
FROM python:3.9-alpine

WORKDIR /code

COPY requirements.txt requirements.txt

RUN pip3 install -r requirements.txt

ADD . /code

CMD [ "python3", "-m" , "flask", "run", "--host=0.0.0.0"]

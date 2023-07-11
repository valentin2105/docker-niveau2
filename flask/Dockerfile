FROM python:3.9-alpine3.18

WORKDIR /python-docker

RUN mkdir /.local  && \
    chown 1000:1000 /.local  -R

USER 1000:1000

COPY requirements.txt requirements.txt
RUN pip3 install -r requirements.txt

COPY app.py .

CMD [ "python3", "-m" , "flask", "run", "--host=0.0.0.0"]

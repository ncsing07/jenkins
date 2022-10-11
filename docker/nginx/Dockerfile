FROM nginx:1.18


COPY ./docker/nginx/nginx.conf ./docker/nginx/app.conf /usr/share/api/
 
RUN cp /usr/share/api/nginx.conf /etc/nginx/nginx.conf \ 
    && cp /usr/share/api/app.conf /etc/nginx/conf.d/default.conf



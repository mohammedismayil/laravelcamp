FROM node:14-alpine as base

WORKDIR /src
COPY nodebackend/package*.json /
EXPOSE 3000

FROM base as production
ENV NODE_ENV=production
# RUN npm ci
# COPY . /
# CMD ["npm","run","dev"]

FROM base as dev
ENV NODE_ENV=development
RUN npm install
COPY . /
CMD ["npm","run","dev"]
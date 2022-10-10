#!/usr/bin/env groovy

pipeline {
    agent none
    stages {
        stage('PHP') {
            agent {
                docker { image 'yiisoftware/yii2-php:7.4-fpm' }
            }
            steps {
                sh 'php -v'
            }
        }
        stage('Redis') {
            agent {
                docker { image 'redis:alpine' }
            }
            steps {
                sh 'redis-server --version'
            }
        }
    }
}

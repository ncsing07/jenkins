pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                script {
                    checkout scm
                    sh 'ls -a'
                    sh 'docker-compose up'
                }
            }
        }
    }
}

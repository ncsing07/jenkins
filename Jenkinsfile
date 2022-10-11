pipeline {
    agent any

    stages {
        stage('Clone and Build') {
            steps {
                script {
                    checkout scm
                    sh 'ls -a'
                    sh 'docker-compose up -d'
                    def response = sh(script: 'curl http://localhost:8012/', returnStdout: true)
                    echo '=========================Response===================' + response
                }
            }
        }
    }
}

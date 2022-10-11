pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                script {
                    checkout scm
                    sh 'ls -a'
                }
            }
        }
    }
}

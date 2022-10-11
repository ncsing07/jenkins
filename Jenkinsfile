pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                script {
                    checkout scm
                    stash includes: 'deploy-script.ps1', name: 'deploy-script'
                }
            }
        }
    }
}

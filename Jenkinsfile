pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                script {
                    checkout scm
                    stash includes: 'docker/nginx/Dockerfile', name: 'deploy-script'
                }
            }
        }
    }
}

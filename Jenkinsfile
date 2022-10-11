pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                script {
                    checkout scm
                    stash includes: 'docker/nginx/Dockerfile', name: 'dockerfile'
                }
            }
        }
        
        stage('Nginx') {
            agent { 
                dockerfile {
                    filename 'Dockerfile'
                }
            }
            steps {
                sh 'nginx -v'
            }
        }
    }
}

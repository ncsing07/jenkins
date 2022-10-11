pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                script {
                    def scmvars = checkout(scm)
                    echo "git details: ${scmvars}"
                }
            }
        }
    }

    post {
        success {
            githubNotify description: 'This is a shorted example',  status: 'SUCCESS'
        }

        failure {
            githubNotify description: 'This is a failure notification',  status: 'FAILURE'
        }
    }
}
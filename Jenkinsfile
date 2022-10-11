pipeline {
    agent any

    stages {
        stage('clone') {
            steps {
                scmvars = checkout(scm)
                echo "git details: ${scmvars}"
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
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


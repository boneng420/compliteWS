<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AccountController extends Controller
{
    public function createAccount(Request $request)
    {
        // Validate input
        $validator = Account::validateAccountCreation($request->all());

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }

        try {
            DB::beginTransaction();

            // Create new account
            $account = Account::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'middleName' => $request->middleName ?? null,
                'birthdate' => $request->birthdate,
                'sex' => $request->sex,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password, // Will be hashed by model mutator
                'accountType' => $request->accountType,
                'status' => 'Active'
            ]);

            DB::commit();

            // Redirect with success message
            return redirect()->back()->with('success', 'Account created successfully!');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Account Creation Error: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'Failed to create account. Please try again.')
                ->withInput($request->except('password'));
        }
    }

    // Method to fetch and display all accounts
    public function listAccounts()
    {
        $accounts = Account::all();
        return view('admin.accounts', compact('accounts'));
    }

    // Method to update account status
    public function updateAccountStatus(Request $request, $accountID)
    {
        $account = Account::findOrFail($accountID);
        $account->status = $request->status;
        $account->save();

        return redirect()->back()->with('success', 'Account status updated successfully!');
    }
}